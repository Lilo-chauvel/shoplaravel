@extends('layouts.app')

@section('title', 'À propos - ShopLaravel')

@section('content')
    <div class="container-lg py-5">
        <!-- Page Header -->
        <section class="text-center mb-5">
            <h1 class="display-4 fw-bold mb-3">À propos de nous</h1>
            <p class="lead text-muted">Découvrez l'histoire et les valeurs de ShopLaravel</p>
        </section>

        <!-- About Content -->
        <section class="row mb-5">
            <!-- Left Column -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="card border-0 bg-light h-100">
                    <div class="card-body">
                        <h3 class="gradient-text fw-bold mb-3">Notre mission</h3>
                        <p class="card-text text-muted">
                            Chez ShopLaravel, notre mission est de vous offrir une expérience d'achat en ligne
                            exceptionnelle.
                            Nous croyons que la technologie et le design moderne peuvent transformer la façon dont les gens
                            achètent en ligne.
                        </p>
                        <p class="card-text text-muted">
                            {{ $presentation }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-6">
                <div class="card border-0 mb-3">
                    <div class="card-body">
                        <div class="mb-3">
                            <span class="badge bg-primary rounded-pill">1</span>
                        </div>
                        <h5 class="card-title">Qualité Premium</h5>
                        <p class="card-text text-muted small">Nous sélectionnons chaque produit avec soin pour garantir la
                            meilleure qualité.</p>
                    </div>
                </div>

                <div class="card border-0 mb-3">
                    <div class="card-body">
                        <div class="mb-3">
                            <span class="badge bg-secondary rounded-pill">2</span>
                        </div>
                        <h5 class="card-title">Service Client</h5>
                        <p class="card-text text-muted small">Notre équipe est toujours disponible pour répondre à vos
                            questions.</p>
                    </div>
                </div>

                <div class="card border-0">
                    <div class="card-body">
                        <div class="mb-3">
                            <span class="badge bg-success rounded-pill">3</span>
                        </div>
                        <h5 class="card-title">Innovation</h5>
                        <p class="card-text text-muted small">Nous investissons dans la technologie pour vous offrir le
                            meilleur.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="row bg-gradient-blue rounded-3 p-5 text-white mb-5"
            style="background: linear-gradient(135deg, #0d6efd, #6f42c1);">
            <div class="col-md-4 text-center mb-4 mb-md-0">
                <h3 class="display-6 fw-bold">10K+</h3>
                <p>Clients satisfaits</p>
            </div>
            <div class="col-md-4 text-center mb-4 mb-md-0">
                <h3 class="display-6 fw-bold">50K+</h3>
                <p>Produits vendus</p>
            </div>
            <div class="col-md-4 text-center">
                <h3 class="display-6 fw-bold">5+</h3>
                <p>Ans d'expérience</p>
            </div>
        </section>

        <!-- Team Section -->
        <section>
            <h2 class="text-center fw-bold mb-5">Notre équipe</h2>
            <div class="row">
                <div class="col-md-4 mb-4 text-center">
                    <div class="mb-3">
                        <div class="rounded-circle bg-primary bg-opacity-10 mx-auto"
                            style="width: 120px; height: 120px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-person-circle text-primary" style="font-size: 3rem;"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold">Alice Martin</h5>
                    <p class="text-muted small">Directrice générale</p>
                </div>

                <div class="col-md-4 mb-4 text-center">
                    <div class="mb-3">
                        <div class="rounded-circle bg-secondary bg-opacity-10 mx-auto"
                            style="width: 120px; height: 120px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-person-circle text-secondary" style="font-size: 3rem;"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold">Jean Dupont</h5>
                    <p class="text-muted small">Responsable produits</p>
                </div>

                <div class="col-md-4 mb-4 text-center">
                    <div class="mb-3">
                        <div class="rounded-circle bg-success bg-opacity-10 mx-auto"
                            style="width: 120px; height: 120px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-person-circle text-success" style="font-size: 3rem;"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold">Sophie Laurent</h5>
                    <p class="text-muted small">Responsable client</p>
                </div>
            </div>
        </section>
    </div>
@endsection