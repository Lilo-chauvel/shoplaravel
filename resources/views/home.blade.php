@extends('layouts.app')

@section('title', 'Accueil - VeloSprint')

@section('content')
    <div class="container-lg py-5">
        @if($shopInfo['isOpen'])
            <!-- Hero Section -->
            <section class="hero-splash p-4 p-lg-5 mb-5 text-center">
                <h1 class="display-3 fw-bold mb-3">
                <h1 class="display-3 fw-bold mb-3">
                    Pedalez plus vite avec <span class="gradient-text">{{ $shopInfo['name'] }}</span>
                </h1>
                <p class="lead text-black-50 mb-4 mx-auto" style="max-width: 620px;">
                    Velos de route, gravel et urbains affutes pour la performance. Design leger, sensations nettes, achat
                    fluide.
                </p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="{{ route('products.index') }}" class="btn btn-gradient btn-lg">
                        Decouvrir les velos
                    </a>
                </div>
            </section>

            <!-- Statistics Section -->
            <section class="row mb-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card soft-card">
                        <div class="card-body text-center">
                            <h3 class="fw-bold">{{ $shopInfo['nbProduct'] }}</h3>
                            <p class="text-muted mb-0">Velos prets a rouler</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card soft-card">
                        <div class="card-body text-center">
                            <h3 class="fw-bold">48h</h3>
                            <p class="text-muted mb-0">Montage atelier express</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card soft-card">
                        <div class="card-body text-center">
                            <h3 class="fw-bold">30 jours</h3>
                            <p class="text-muted mb-0">Essai et retour zen</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Features Section -->
            <section class="mb-5">
                <h2 class="text-center fw-bold mb-5">Pourquoi choisir VeloSprint ?</h2>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card border-0 h-100 feature-card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <i class="bi bi-speedometer2 text-primary" style="font-size: 1.5rem;"></i>
                                </div>
                                <h5 class="card-title">Rendement pur</h5>
                                <p class="card-text text-muted">Cadres rigides, transmission precise, energie convertie en
                                    vitesse.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card border-0 h-100 feature-card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <i class="bi bi-compass text-success" style="font-size: 1.5rem;"></i>
                                </div>
                                <h5 class="card-title">Choix affute</h5>
                                <p class="card-text text-muted">Route, gravel, urbain ou electrique, chaque profil est guide.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card border-0 h-100 feature-card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <i class="bi bi-tools text-info" style="font-size: 1.5rem;"></i>
                                </div>
                                <h5 class="card-title">Atelier expert</h5>
                                <p class="card-text text-muted">Montage, reglages et controle qualite avant chaque depart.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card border-0 h-100 feature-card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <i class="bi bi-heart-pulse text-warning" style="font-size: 1.5rem;"></i>
                                </div>
                                <h5 class="card-title">Confort longue distance</h5>
                                <p class="card-text text-muted">Positions equilibrees, composants durables, plaisir constant.
                                </p>
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