@extends('layouts.app')

@section('title', 'Produits - ShopLaravel')

@section('content')
    <div class="container-lg py-5">
        <!-- Page Header -->
        <section class="text-center mb-5">
            <h1 class="display-4 fw-bold mb-3">Nos Produits</h1>
            <p class="lead text-muted">Découvrez notre sélection exclusive de produits de qualité</p>
        </section>

        @forelse ($products as $product)
            @if ($loop->first)
                <div class="row">
            @endif

                <!-- Product Card -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card border-0 h-100">
                        <!-- Product Image -->
                        <div class="bg-light p-4 text-center"
                            style="min-height: 200px; display: flex; align-items: center; justify-content: center;">
                            <div>
                                <i class="bi bi-image text-muted" style="font-size: 2rem;"></i>
                                <p class="text-muted small mt-2 mb-0">{{ $product['name'] }}</p>
                            </div>
                        </div>

                        <!-- Product Info -->
                        <div class="card-body">
                            <h5 class="card-title">{{ $product['name'] }}</h5>

                            @if(isset($product['description']))
                                <p class="card-text text-muted small">
                                    {{ Str::limit($product['description'], 100) }}
                                </p>
                            @endif

                            <!-- Price Section -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                @if(isset($product['price']))
                                    <div>
                                        <small class="text-muted d-block">Prix</small>
                                        <strong
                                            class="text-primary">{{ isset($product['price']) ? number_format($product['price'], 2, ',', ' ') : 'N/A' }}
                                            €</strong>
                                    </div>
                                @endif

                                @if(isset($product['stock']))
                                    <div class="text-end">
                                        <small class="text-muted d-block">Stock</small>
                                        <strong class="{{ $product['stock'] > 0 ? 'text-success' : 'text-danger' }}">
                                            {{ $product['stock'] }}
                                        </strong>
                                    </div>
                                @endif
                            </div>

                            <!-- Action Button -->
                            <button class="btn btn-gradient btn-sm w-100">
                                <i class="bi bi-cart-plus icon-sm me-2"></i> Ajouter au panier
                            </button>
                        </div>
                    </div>
                </div>

                @if ($loop->last)
                    </div>
                @endif
        @empty
            <!-- Empty State -->
            <div class="alert alert-info text-center py-5" role="alert">
                <i class="bi bi-inbox" style="font-size: 3rem; color: #0dcaf0;"></i>
                <h4 class="mt-3">Aucun produit disponible</h4>
                <p class="mb-3 text-muted">Les produits seront bientôt disponibles. Revenez plus tard !</p>
                <a href="{{ route('home') }}" class="btn btn-primary">Retour à l'accueil</a>
            </div>
        @endforelse
    </div>
@endsection