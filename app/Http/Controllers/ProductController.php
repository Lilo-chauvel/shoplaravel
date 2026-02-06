<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $product = Product::create([
        //     'name',
        //     'slug',
        //     'description',
        //     'price',
        //     'stock',
        //     'status',
        //     'category_id'
        // ]);
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $product = Product::createOrFirst([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'stock' => $request->stock,
                'active' => $request->has('active'),
                'category_id' => $request->category_id
            ]);
            return redirect()->route('products.index')
                ->with('newProductName', 'Votre produit ' . $product->name . ' a bien était créé.')->with('color', 'bg-success');
        } catch (Exception) {
            return redirect()->route('products.index')
                ->with('newProductName', 'Votre produit ' . $request->name . ' n\'a pas pu être créé. Vous avez dû faire une erreur')->with('color', 'bg-danger');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $productSearch = Product::where('id', '=', $id)->firstOrFail();
        return view('products.search', compact('productSearch', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
