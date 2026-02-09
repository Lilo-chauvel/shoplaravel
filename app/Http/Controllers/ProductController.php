<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use DB;
use Error;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->get();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $product = Product::createOrFirst([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'stock' => $request->input('stock'),
                'active' => $request->boolean('active'),
                'category_id' => $request->input('category_id')
            ]);
            return redirect()->route('products.index')
                ->with('newProductName', 'Votre produit ' . $product->name . ' a bien était créé.')->with('color', 'bg-success');
        } catch (Exception) {
            return redirect()->route('products.index')
                ->with('newProductName', 'Votre produit ' . $request->input('name') . ' n\'a pas pu être créé. Vous avez dû faire une erreur')->with('color', 'bg-danger');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $productSearch = Product::where('id', '=', $id)->orWhere('slug', '=', $id)->with('category')->firstOrFail();
        return view('products.search', compact('productSearch', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $product)
    {
        $OBJproduct = Product::where('id', '=', $product)->first();
        $categories = Category::all();
        return view('products.edit', compact('product', 'OBJproduct','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->input('name'));
        try {
                
            Product::where('id', '=', $id)->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'stock' => $request->input('stock'),
                'status' => $request->boolean('active'),
                'category_id' => $request->input('category_id')
            ]);
            $product = Product::find($id, 'id');

            return redirect()->route('products.show', $id)
                ->with('newProductName', 'Votre produit ' . $product->name . ' a bien était mise à jour.')->with('color', 'bg-success');

        } catch (Exception) {
            return redirect()->route('products.index')
                ->with('newProductName', 'Votre produit ' . $request->input('name') . ' n\'a pas pu être mise à jour. Vous avez dû faire une erreur')->with('color', 'bg-danger');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $productName = $product->name;
        $product->delete();
        return redirect()->route('products.index')
            ->with('success', 'Le produit "' . $productName . '" a bien été supprimé.');
        try {
        } catch (Exception $e) {
            return redirect()->route('products.index')
                ->with('error', 'Une erreur est survenue lors de la suppression du produit.');
        }
    }
}
