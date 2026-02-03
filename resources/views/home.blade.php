@extends('layouts.app')

@section('title', 'Accueil - ShopLaravel')

@section('content')
    <div class="container-lg py-5">
        @if($shopInfo['isOpen'])
            <!-- Hero Section -->
            <section class="text-center mb-5">
                <h1 class="display-4 fw-bold mb-4">
                    Bienvenue au monde de <span class="gradient-text">{{ $shopInfo['name'] }}</span>
                </h1>
                <p class="lead text-muted mb-4">
                    Découvrez nos collections exclusives et profitez d'une expérience d'achat simplifiée, propulsée par la
                    technologie Laravel.
                </p>
                <a href="{{ route('products.index') }}" class="btn btn-gradient btn-lg">
                    Découvrir nos produits
                </a>
            </section>

            <!-- Statistics Section -->
            <section class="row mb-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card bg-primary bg-opacity-10 border-0">
                        <div class="card-body text-center">
                            <h3 class="text-primary fw-bold">{{ $shopInfo['nbProduct'] }}</h3>
                            <p class="text-muted mb-0">Produits disponibles</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card bg-success bg-opacity-10 border-0">
                        <div class="card-body text-center">
                            <h3 class="text-success fw-bold">100%</h3>
                            <p class="text-muted mb-0">Satisfaction garantie</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card bg-info bg-opacity-10 border-0">
                        <div class="card-body text-center">
                            <h3 class="text-info fw-bold">24/7</h3>
                            <p class="text-muted mb-0">Support disponible</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Features Section -->
            <section class="mb-5">
                <h2 class="text-center fw-bold mb-5">Pourquoi choisir ShopLaravel ?</h2>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card border-0 h-100">
                            <div class="card-body">
                                <div class="mb-3">
                                    <i class="bi bi-lightning-charge text-primary" style="font-size: 1.5rem;"></i>
                                </div>
                                <h5 class="card-title">Expérience rapide</h5>
                                <p class="card-text text-muted">Interface fluide et responsive pour une navigation optimale.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card border-0 h-100">
                            <div class="card-body">
                                <div class="mb-3">
                                    <i class="bi bi-shield-lock text-success" style="font-size: 1.5rem;"></i>
                                </div>
                                <h5 class="card-title">Sécurisé</h5>
                                <p class="card-text text-muted">Vos données sont protégées par les dernières technologies de
                                    sécurité.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card border-0 h-100">
                            <div class="card-body">
                                <div class="mb-3">
                                    <i class="bi bi-check-circle text-info" style="font-size: 1.5rem;"></i>
                                </div>
                                <h5 class="card-title">Fiable</h5>
                                <p class="card-text text-muted">Des produits de qualité et une livraison garantie.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card border-0 h-100">
                            <div class="card-body">
                                <div class="mb-3">
                                    <i class="bi bi-headset text-warning" style="font-size: 1.5rem;"></i>
                                </div>
                                <h5 class="card-title">Support client</h5>
                                <p class="card-text text-muted">Une équipe prête à vous aider 24 heures sur 24.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @else
            <!-- Shop Closed Message -->
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <div class="text-center">
                    <h4 class="alert-heading mb-3">
                        <i class="bi bi-exclamation-circle"></i> Le magasin est actuellement fermé
                    </h4>
                    <p class="mb-0">Nous serons bientôt de retour. Merci de votre visite !</p>
                </div>
            </div>
        @endif
    </div>
@endsection