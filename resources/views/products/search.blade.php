@extends('layouts.app')

@section('title', 'Recherche - ' . ($productSearch->name ?? 'Velo'))

@section('content')
    <div class="container py-5">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item"><a href="/products">Velos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Recherche</li>
            </ol>
        </nav>

        <!-- Search Result Title -->
        <div class="mb-4">
            <h1 class="h3 fw-bold mb-2">Resultat de recherche</h1>
            <p class="text-muted">Velo trouve pour votre recherche</p>
        </div>

        <!-- Product Card -->
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="card shadow-sm border-0 overflow-hidden">
                    <div class="row g-0">
                        <!-- Product Image Section -->
                        <div class="col-md-5">
                            <div class="product-image-frame h-100">
                                <a href="#"
                                    class="image-zoom-trigger"
                                    data-bs-toggle="modal"
                                    data-bs-target="#productImageModal"
                                    data-image-src="{{ $productSearch->image }}"
                                    aria-label="Voir l'image en grand">
                                @if($productSearch->image)
                                    <img src="{{ $productSearch->image }}" class="product-show-image" alt="{{ $productSearch->name }}">
                                @else
                                    <div class="bg-light p-4 text-center d-flex align-items-center justify-content-center h-100">
                                        <div>
                                            <i class="bi bi-image text-muted" style="font-size: 2rem;"></i>
                                            <p class="text-muted small mt-2 mb-0">{{ $productSearch->name }}</p>
                                        </div>
                                    </div>
                                @endif
                                </a>
                            </div>
                        </div>

                        <!-- Product Details Section -->
                        <div class="col-md-7">
                            <div class="card-body p-4">
                                <!-- Product Name -->
                                <h2 class="h4 fw-bold mb-2">{{ $productSearch->name }}</h2>

                                <!-- Category Badge -->
                                <div class="mb-3">
                                    <span class="badge badge-soft px-3 py-2">
                                        <i class="bi bi-tag me-1"></i>
                                        {{ $productSearch->category->name ?? 'Non categorise' }}
                                    </span>
                                </div>

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
                                    <button class="btn btn-gradient btn-lg flex-fill" 
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
                            <h6 class="mb-1">Livraison atelier</h6>
                            <small class="text-muted">2-4 jours ajustes</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 bg-light text-center p-3">
                            <i class="bi bi-shield-check text-primary mb-2" style="font-size: 2rem;"></i>
                            <h6 class="mb-1">Garantie cadre</h6>
                            <small class="text-muted">2 ans constructeur</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 bg-light text-center p-3">
                            <i class="bi bi-arrow-repeat text-primary mb-2" style="font-size: 2rem;"></i>
                            <h6 class="mb-1">Retour facile</h6>
                            <small class="text-muted">30 jours d'essai</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Image Modal -->
    <div class="modal fade" id="productImageModal" tabindex="-1" aria-labelledby="productImageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content bg-dark">
                <div class="modal-header border-0">
                    <h5 class="modal-title text-white" id="productImageModalLabel">{{ $productSearch->name }}</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="modal-image-wrap">
                        <img src="" alt="{{ $productSearch->name }}" class="modal-product-image" id="modalProductImage">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .product-image-frame {
            min-height: 320px;
            background: #f2f4f3;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
        }

        .product-show-image {
            width: 100%;
            height: 100%;
            min-height: 320px;
            object-fit: cover;
            display: block;
        }

        .image-zoom-trigger {
            display: block;
            width: 100%;
            height: 100%;
        }

        .modal-image-wrap {
            background: #0f1f1a;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            min-height: 60vh;
        }

        .modal-product-image {
            max-width: 100%;
            max-height: 70vh;
            object-fit: contain;
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
            color: #145a4b;
            text-decoration: none;
        }

        .breadcrumb-item a:hover {
            text-decoration: underline;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const modalImage = document.getElementById('modalProductImage');
            document.querySelectorAll('.image-zoom-trigger').forEach(function (trigger) {
                trigger.addEventListener('click', function () {
                    const imageSrc = trigger.getAttribute('data-image-src');
                    if (imageSrc && modalImage) {
                        modalImage.src = imageSrc;
                    }
                });
            });
        });
    </script>

@endsection