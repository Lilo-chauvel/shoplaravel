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
        $products = Product::with('category')->get();
        return view('products.index', compact('products'));
    }

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $productSearch = Product::where('id', '=', $id)->orWhere('slug', '=', $id)->with('category')->firstOrFail();
        return view('products.show', compact('productSearch', 'id'));
    }

    

    
}
