@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
    <H1>Dashboard Admin</H1>
    <div>
        <div class="text-end">
            <form action="{{ route('admin.products.create') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success"><i class="bi bi-trash"></i>Ajouter un produit</button>
            </form>
        </div>
        @php
            $products = \App\Models\Product::orderBy('id')->get();
        @endphp
        <div class="mt-3">
            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Produit</th>
                        <th scope="col" class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td class="text-end">
                                <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-success btn-sm">
                                    <i class="bi bi-pencil"></i>Modifier
                                </a>
                                <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i>Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="text-end">
            <form action="{{ route('admin.categories.create') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success"><i class="bi bi-trash"></i>Créer une catégorie</button>
            </form>
        </div>
        @php
            $categories = \App\Models\Category::orderBy('id')->get();
        @endphp
        <div class="mt-3">
            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Categorie</th>
                        <th scope="col" class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td class="text-end">
                                <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-success btn-sm">
                                    <i class="bi bi-pencil"></i>Modifier
                                </a>
                                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i>Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection