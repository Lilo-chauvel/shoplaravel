<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(int $productNumber)
    {
        return "Product details n°" . $productNumber;
    }
    public function index()
    {
        $products = [
            ['id' => 1, 'name' => 'Classic Laravel T-Shirt', 'price' => 24.99],
            ['id' => 2, 'name' => 'Artisan Coffee Mug', 'price' => 12.50],
            ['id' => 3, 'name' => 'Eloquent ORM Hoodie', 'price' => 49.90],
            ['id' => 4, 'name' => 'Blade Template Stickers', 'price' => 4.99],
            ['id' => 5, 'name' => 'PHP 8.2 Reference Poster', 'price' => 15.00],
        ];
        return view('products.index',compact('products'));
    }
}
