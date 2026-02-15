@extends('layouts.app')

@section('title','Commandes')

@section('content')
<h1>Commandes passées</h1>

    <section>
        <h3>Numéro de commande : {{$order->id}}</h3>
        <p>Statue : {{ $order->status }}</p>
        <p>total : {{ $order->total }}€</p>
    </section>

@endsection