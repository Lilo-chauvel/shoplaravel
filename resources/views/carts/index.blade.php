@extends('layouts.app')

@section('title', 'A propos - VeloSprint')

@section('content')

    @foreach ($carts as $cart)
        <H1>Panier n°{{ $cart->id }}</H1>
            <p>----------------------------------</p>
            @foreach ($cart->cartItems as $cartItem)
                <H3>{{ $cartItem->product->name }}</H3>
                <p>Prix unitaire : {{ $cartItem->price }} €</p>
                <p>Quantité : {{ $cartItem->quantity }}</p>
                <p>Prix total : <strong>{{ $cartItem->price * $cartItem->quantity }}</strong> €</p>
                <br>
            @endforeach
            <p>----------------------------------</p>
    @endforeach

@endsection