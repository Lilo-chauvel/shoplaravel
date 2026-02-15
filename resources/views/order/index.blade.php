@extends('layouts.app')

@section('title', 'Commandes')

@section('content')
    <h1>Historique de commande</h1>
    @if(empty($orders))
        @foreach ($orders as $order)
            <section>
                <h3>Numéro de commande : {{$order->id}}</h3>
                <p>Statue : {{ $order->status }}</p>
                <p>total : {{ $order->total }}€</p>
            </section>
        @endforeach
    @else
        <h3>Vous n'avez pas encore passé de commander</h3>
    @endif
@endsection