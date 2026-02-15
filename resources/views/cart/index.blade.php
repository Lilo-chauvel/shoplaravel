@extends('layouts.app')

@section('title', 'Panier - VeloSprint')

@section('content')
    <div class="container-lg py-5">
        <!-- Page Header -->
        <section class="text-center mb-5">
            <h1 class="display-4 fw-bold mb-3">Votre panier</h1>
            <p class="lead text-muted">Retrouvez ici vos articles sélectionnés pour l'achat.</p>
        </section>
        @if(count($products) > 0)
            <div class="row mb-4">
                @foreach ($products as $product)
                    <div class="col-md-6 col-lg-4 mb-4 ">
                        <div class="card border-0 h-100 shadow-sm feature-card">
                            <!-- Product Image -->
                            @if($product->image)
                                <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}"
                                    style="height: 250px; object-fit: cover;">
                            @else
                                <div class="bg-light p-4 text-center d-flex align-items-center justify-content-center"
                                    style="min-height: 250px;">
                                    <div>
                                        <i class="bi bi-image text-muted" style="font-size: 2rem;"></i>
                                        <p class="text-muted small mt-2 mb-0">{{ $product->name }}</p>
                                    </div>
                                </div>
                            @endif
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                @if(isset($product->description))
                                    <p class="card-text text-muted small">{{ Str::limit($product->description, 100) }}</p>
                                @endif
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div>
                                        <small class="text-muted d-block">Quantité</small>
                                        <span class="fw-bold">{{ $product->quantity }}</span>
                                    </div>
                                    <div>
                                        <small class="text-muted d-block">Prix unitaire</small>
                                        <strong class="text-primary">{{ isset($product->price) ? number_format($product->price, 2, ',', ' ') : 'N/A' }} €</strong>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div class="text-end">
                                        <small class="text-muted d-block">Catégorie</small>
                                        <span>{{ $product->category->name ?? '-' }}</span>
                                    </div>
                                    <div>
                                        <small class="text-muted d-block">Total produit</small>
                                        <span class="fw-bold">{{ isset($product->totalProduct) ? number_format($product->totalProduct, 2, ',', ' ') : 'N/A' }} €</span>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap gap-2 mt-auto">
                                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-gradient btn-sm flex-grow-1"><i
                                                class="bi bi-plus-circle"></i> Ajouter 1</button>
                                    </form>
                                    <form action="{{ route('cart.update', $product->id) }}" method="POST"
                                        class="d-flex align-items-center flex-grow-1">
                                        @csrf
                                        @method('PATCH')
                                        <input type="number" name="numberToSet" id="numberToSet" min="1"
                                            value="{{ $product->quantity }}" class="form-control form-control-sm me-2"
                                            style="width: 70px;">
                                        <button type="submit" class="btn btn-secondary btn-sm"><i class="bi bi-pencil-square"></i>
                                            Modifier</button>
                                    </form>
                                    <form action="{{ route('cart.remove', $product->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i>
                                            Supprimer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-end mb-4">
                <h3>Total commande : <span class="fw-bold gradient-text">{{ $total }}€</span></h3>
            </div>
            <div class="text-end">
                <form action="{{ route('order.store') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success"><i class="bi bi-trash"></i>Valider le panier</button>
                </form>
            </div>
            <div class="text-end">
                <form action="{{ route('cart.clear') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Supprimer le panier</button>
                </form>
            </div>
        @else
            <div class="alert alert-info text-center">
                Votre panier est vide.
            </div>
        @endif
    </div>
@endsection