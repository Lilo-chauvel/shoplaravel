@extends('layouts.app')

@section('title', 'A propos - VeloSprint')

@section('content')

    <H1>Panier n°{{ $order->id }}</H1>
    <p>----------------------------------</p>
    @foreach ($order->orderItems as $orderItem)
        <H3>{{ $orderItem->product->name }}</H3>
        <p>Prix unitaire : {{ $orderItem->price }} €</p>
        <p>Quantité : {{ $orderItem->quantity }}</p>
        <p>Prix total : <strong>{{ $orderItem->price * $orderItem->quantity }}</strong> €</p>
        <br>
    @endforeach
    <p>----------------------------------</p>

@endsection