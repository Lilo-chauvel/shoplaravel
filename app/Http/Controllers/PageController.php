<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $shopInfo = [
            'name' => 'ShopLaravel',
            'nbProduct' => 25,
            'isOpen' => true
        ];
        return view('home',compact('shopInfo'));
    }
    public function about()
    {
        $presentation = 'Welcome to ShopLaravel, your go-to online store developed with the power of the Laravel framework. We are committed to providing you with a modern and seamless shopping experience. Explore our catalogue to discover the details of our products and enjoy an interface optimised for your needs.';
        return view('about', compact('presentation'));
    }
}