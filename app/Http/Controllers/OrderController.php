<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::where('user_id','=',auth()->id())->get();
        if(empty($orders)){
            return view('order.index');
        }
        return view('order.index')->with(compact('orders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(empty(session('cart'))){
            return redirect()->route('cart.index')->withErrors('Votre panier est vide');
        }
        $cart = session('cart');
        $total = 0;
        foreach($cart as $IdProduct => $quantity){
            $total += $quantity*Product::where('id','=',$IdProduct)->first()->price;
            }
        DB::transaction(function()use($total){
            Order::create([
            'user_id'=>auth()->id(),
            'status' => 'validate',
            'total' => $total,
            ]);
        });
        session()->put('cart', []);
        return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order= Order::where('user_id','=',auth()->id())->where('id','=',$id)->first();
    if(empty($order)){
        return redirect()->route('order.index')->withErrors('Vous n\'avez pas de commande à ce numéro');
    }
        return view('order.show')->with(compact('order'));
    }

}
