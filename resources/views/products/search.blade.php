@extends('layouts.app')

@section('title', 'Résultats de recherche - ' . ($productSearch->name ?? 'Produit'))

@section('content')
<div class="container py-5">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Accueil</a></li>
            <li class="breadcrumb-item"><a href="/products">Produits</a></li>
            <li class="breadcrumb-item active" aria-current="page">Recherche</li>
        </ol>
    </nav>

    <!-- Search Result Title -->
    <div class="mb-4">
        <h1 class="h3 fw-bold mb-2">Résultat de recherche</h1>
        <p class="text-muted">Produit trouvé pour votre recherche</p>
    </div>

    <!-- Product Card -->
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="card shadow-sm border-0 overflow-hidden">
                <div class="row g-0">
                    <!-- Product Image Section -->
                    <div class="col-md-5">
                        <div class="bg-gradient-light p-5 h-100 d-flex align-items-center justify-content-center"
                             style="min-height: 300px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                            <div class="text-center text-white">
                                <i class="bi bi-image" style="font-size: 4rem; opacity: 0.8;"></i>
                                <p class="mt-3 mb-0 fw-semibold">{{ $productSearch->name }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Product Details Section -->
                    <div class="col-md-7">
                        <div class="card-body p-4">
                            <!-- Product Name -->
                            <h2 class="h4 fw-bold mb-3">{{ $productSearch->name }}</h2>

                            <!-- Category Badge -->
                            @if(isset($productSearch->category))
                            <div class="mb-3">
                                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2">
                                    <i class="bi bi-tag me-1"></i>
                                    {{ $productSearch->category->name ?? 'Non catégorisé' }}
                                </span>
                            </div>
                            @endif

                            <!-- Description -->
                            @if(isset($productSearch->description))
                            <div class="mb-4">
                                <h6 class="text-muted text-uppercase small fw-semibold mb-2">Description</h6>
                                <p class="text-secondary mb-0">
                                    {{ $productSearch->description }}
                                </p>
                            </div>
                            @endif

                            <hr class="my-4">

                            <!-- Price and Stock -->
                            <div class="row g-3 mb-4">
                                @if(isset($productSearch->price))
                                <div class="col-6">
                                    <div class="p-3 bg-light rounded">
                                        <small class="text-muted d-block mb-1">Prix unitaire</small>
                                        <h4 class="mb-0 text-primary fw-bold">
                                            {{ number_format($productSearch->price, 2, ',', ' ') }} €
                                        </h4>
                                    </div>
                                </div>
                                @endif

                                @if(isset($productSearch->stock))
                                <div class="col-6">
                                    <div class="p-3 bg-light rounded">
                                        <small class="text-muted d-block mb-1">Disponibilité</small>
                                        <h4 class="mb-0 fw-bold {{ $productSearch->stock > 0 ? 'text-success' : 'text-danger' }}">
                                            @if($productSearch->stock > 0)
                                                <i class="bi bi-check-circle me-1"></i>{{ $productSearch->stock }} en stock
                                            @else
                                                <i class="bi bi-x-circle me-1"></i>Rupture
                                            @endif
                                        </h4>
                                    </div>
                                </div>
                                @endif
                            </div>

                            <!-- Action Buttons -->
                            <div class="d-grid gap-2 d-md-flex">
                                <button class="btn btn-primary btn-lg flex-fill" 
                                        {{ isset($productSearch->stock) && $productSearch->stock <= 0 ? 'disabled' : '' }}>
                                    <i class="bi bi-cart-plus me-2"></i>
                                    Ajouter au panier
                                </button>
                                <a href="/products" class="btn btn-outline-secondary btn-lg">
                                    <i class="bi bi-arrow-left me-2"></i>
                                    Retour
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Info Cards -->
            <div class="row g-3 mt-4">
                <div class="col-md-4">
                    <div class="card border-0 bg-light text-center p-3">
                        <i class="bi bi-truck text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6 class="mb-1">Livraison rapide</h6>
                        <small class="text-muted">2-3 jours ouvrés</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 bg-light text-center p-3">
                        <i class="bi bi-shield-check text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6 class="mb-1">Garantie</h6>
                        <small class="text-muted">1 an constructeur</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 bg-light text-center p-3">
                        <i class="bi bi-arrow-repeat text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6 class="mb-1">Retour gratuit</h6>
                        <small class="text-muted">30 jours</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .bg-gradient-light {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175) !important;
    }
    
    .breadcrumb {
        background: transparent;
        padding: 0;
    }
    
    .breadcrumb-item a {
        color: #667eea;
        text-decoration: none;
    }
    
    .breadcrumb-item a:hover {
        text-decoration: underline;
    }
</style>

@endsection