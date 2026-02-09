@extends('layouts.app')

@section('title', 'Categorie - ' . $categorySearch->name)

@section('content')

    <h1>{{ $categorySearch->name }}</h1>
    <p>{{ $categorySearch->description }}</p>
    <select>
        @foreach ($categorySearch->products as $product)
            <option value="{{ $product->name }}">{{ $product->name }}</option>
        @endforeach
    </select>

@endsection