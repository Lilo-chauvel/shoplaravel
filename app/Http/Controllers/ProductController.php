<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(int $productId)
    {
        $productSearch = Product::where('id','=', $productId)->firstOrFail();
        return view('products.search' ,compact('productSearch','productId'));
    }
    public function index()
    {
        $products = Product::all();

        return view('products.index',compact('products'));
    }
}