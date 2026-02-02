<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(int $productNumber)
    {
        return "Détails du produits n°". $productNumber;
    }
}
