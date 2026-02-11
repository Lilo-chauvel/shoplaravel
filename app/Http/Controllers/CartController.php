<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

public function index()
{
        $cart = session('cart',[]);
        $products = Product::whereIn('id', '=', array_keys($cart))->get();
        foreach($products as $product)
                {
                        $product->quantity = $cart
                }
        return view('cart.index',compact('cart','products'));
}


public function add($product)
{
        // Récupérer le panier depuis la session ou un tableau vide
        $cart = session()->get('cart', []);
        $product = Product::where('id', '=', $product)->first();
        // Si le produit existe déjà, incrémenter la quantité
        if (isset($cart[$product])) {
                $cart[$product]++;
        } else {
                // Sinon, ajouter le produit avec quantité 1
                $cart[$product] = 1;
        }
        // Sauvegarder le panier en session
        session()->put('cart', $cart);
        return redirect()->route('cart.index');
}

public function update()
{

}

public function remove()
{

}

public function clear()
{
        session()->put('cart', []);
                return redirect()->route('cart.index');
}

}
