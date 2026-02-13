<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

public function index()
{
        $cart = session('cart',[]);
        $products = Product::whereIn('id', array_keys($cart))->get();
        $total = null;
        foreach($products as $product)
        {
                $product->quantity = $cart[$product->id];
                $product->totalProduct = $product->price * $product->quantity;
                $total += $product->totalProduct;
        }
        return view('cart.index',compact('cart','products','total'));
}


public function add($product)
{
        // Récupérer le panier depuis la session ou un tableau vide
        $cart = session()->get('cart', []);
        $product = Product::where('id', '=', $product)->first();
        // Si le produit existe déjà, incrémenter la quantité
        if (isset($cart[$product->id])) {
                $cart[$product->id]++;
        } else {
                // Sinon, ajouter le produit avec quantité 1
                $cart[$product->id] = 1;
        }
        // Sauvegarder le panier en session
        session()->put('cart', $cart);
        return redirect()->route('cart.index');
}

public function update(Request $request, $product)
{
    $cart = session()->get('cart');
    $cart[$product] = $request->input('numberToSet');
    session()->put('cart', $cart);
    return redirect()->route('cart.index');
}

public function remove($product)
{
        $cart = session()->get('cart');
        unset($cart[$product]);
        session()->put('cart', $cart);
        return redirect()->route('cart.index');
}

public function clear()
{
        session()->put('cart', []);
                return redirect()->route('cart.index');
}

}
