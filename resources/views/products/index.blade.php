@extends('layouts.app')

@section('title', 'Velos - VeloSprint')

@section('content')
    <div class="container-lg py-5">
        <!-- Page Header -->
        <section class="text-center mb-5">
            <h1 class="display-4 fw-bold mb-3">Nos velos</h1>
            <p class="lead text-muted">Route, gravel, urbain. Des velos affutes pour vous pousser plus loin.</p>
        </section>
        @forelse ($products as $product)
            @if ($loop->first)
                <div class="row">
            @endif

                <!-- Product Card -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card border-0 h-100 shadow-sm feature-card">
                        <!-- Product Image clickable for view -->
                        <a href="{{ route('products.show', $product->id) }}" class="text-decoration-none">
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
                        </a>

                        <!-- Product Info -->
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>

                            @if(isset($product->description))
                                <p class="card-text text-muted small">
                                    {{ Str::limit($product->description, 100) }}
                                </p>
                            @endif

                            <!-- Price Section -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                @if(isset($product->price))
                                    <div>
                                        <small class="text-muted d-block">Prix</small>
                                        <strong
                                            class="text-primary">{{ isset($product->price) ? number_format($product->price, 2, ',', ' ') : 'N/A' }}
                                            €</strong>
                                    </div>
                                @endif

                                @if(isset($product->stock))
                                    <div class="text-end">
                                        <small class="text-muted d-block">Stock</small>
                                        <strong class="{{ $product->stock > 0 ? 'text-success' : 'text-danger' }}">
                                            {{ $product->stock }}
                                        </strong>
                                    </div>
                                @endif
                            </div>

                            <div>
                                <p>Categorie : {{ $product->category->name }}</p>
                            </div>

                            <!-- Action Buttons -->
                            <div class="d-flex gap-2">
                                <form action="{{ route('cart.add', $product) }}" method="POST">
                                    @csrf
                                    <button type="sumit" class="btn btn-gradient btn-sm flex-grow-1">
                                        <i class="bi bi-cart-plus icon-sm me-2"></i> Ajouter au panier
                                    </button>
                                </form>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-outline-secondary btn-sm">
                                    <i class="bi bi-pencil icon-sm"></i>
                                </a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                    style="display: inline;"
                                    onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                        <i class="bi bi-trash icon-sm"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                @if ($loop->last)
                    </div>
                @endif
        @empty
            <!-- Empty State -->
            <div class="alert alert-info text-center py-5" role="alert">
                <i class="bi bi-bicycle" style="font-size: 3rem; color: #1f7a62;"></i>
                <h4 class="mt-3">Le peloton arrive</h4>
                <p class="mb-3 text-muted">Nos velos sont en preparation atelier. Revenez tres vite.</p>
                <a href="{{ route('home') }}" class="btn btn-gradient">Retour a l'accueil</a>
            </div>
        @endforelse
    </div>
@endsection