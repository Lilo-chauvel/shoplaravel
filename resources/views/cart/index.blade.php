@extends('layouts.app')

@section('title', 'A propos - VeloSprint')

@section('content')

    @foreach (session('cart') as $product => $quantity)

            <p>Quantité :{{ $quantity }}</p>
            <form action="{{ route('cart.add', $product) }}" method="POST">
                @csrf
                <button type="sumit">Ajouter</button>
            </form>
            <form action="{{ route('cart.update', $product) }}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit">Modifier</button>
            </form>
            <form action="{{ route('cart.remove', $product) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="sumit">Supprimer</button>
            </form>
    @endforeach
    <br>
        <form action="{{ route('cart.clear') }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="sumit">Supprimer le panier</button>
        </form>


@endsection