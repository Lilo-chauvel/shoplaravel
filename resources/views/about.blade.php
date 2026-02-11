@extends('layouts.app')

@section('title', 'A propos - VeloSprint')

@section('content')
    <div class="container-lg py-5">
        <!-- Page Header -->
        <section class="text-center mb-5">
            <h1 class="display-4 fw-bold mb-3">A propos de nous</h1>
            <p class="lead text-muted">L'esprit velo, le sens du detail et la recherche de performance.</p>
        </section>

        <!-- About Content -->
        <section class="row mb-5">
            <!-- Left Column -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="card border-0 soft-card h-100">
                    <div class="card-body">
                        <h3 class="gradient-text fw-bold mb-3">Notre mission</h3>
                        <p class="card-text text-muted">
                            Chez VeloSprint, nous rendons chaque sortie plus rapide, plus fluide et plus fun. Nous
                            selectionnons des velos qui transmettent l'energie, avec un montage atelier qui inspire
                            confiance.
                        </p>
                        <p class="card-text text-muted">{{ $presentation }}</p>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-6">
                <div class="card border-0 mb-3 feature-card">
                    <div class="card-body">
                        <div class="mb-3">
                            <span class="badge badge-soft">1</span>
                        </div>
                        <h5 class="card-title">Cadres et composants premium</h5>
                        <p class="card-text text-muted small">Chaque velo est choisi pour sa fiabilite, sa legerete et sa
                            precision.</p>
                    </div>
                </div>

                <div class="card border-0 mb-3 feature-card">
                    <div class="card-body">
                        <div class="mb-3">
                            <span class="badge badge-soft">2</span>
                        </div>
                        <h5 class="card-title">Conseils de passionnes</h5>
                        <p class="card-text text-muted small">On ajuste votre montage, vos tailles et vos objectifs.</p>
                    </div>
                </div>

                <div class="card border-0 feature-card">
                    <div class="card-body">
                        <div class="mb-3">
                            <span class="badge badge-soft">3</span>
                        </div>
                        <h5 class="card-title">Experience sportive</h5>
                        <p class="card-text text-muted small">Des velos qui repondent vite et restent stables a haute
                            cadence.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="row hero-splash rounded-3 p-5 text-black mb-5">
            <div class="col-md-4 text-center mb-4 mb-md-0">
                <h3 class="display-6 fw-bold">12K+</h3>
                <p>Clients qui roulent deja</p>
            </div>
            <div class="col-md-4 text-center mb-4 mb-md-0">
                <h3 class="display-6 fw-bold">140K</h3>
                <p>Km parcourus chaque semaine</p>
            </div>
            <div class="col-md-4 text-center">
                <h3 class="display-6 fw-bold">8 ans</h3>
                <p>De passion velo</p>
            </div>
        </section>

        <!-- Team Section -->
        <section>
            <h2 class="text-center fw-bold mb-5">Notre equipe</h2>
            <div class="row">
                <div class="col-md-4 mb-4 text-center">
                    <div class="mb-3">
                        <div class="rounded-circle bg-success bg-opacity-10 mx-auto"
                            style="width: 120px; height: 120px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-person-circle text-success" style="font-size: 3rem;"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold">Alice Martin</h5>
                    <p class="text-muted small">Directrice sportive</p>
                </div>

                <div class="col-md-4 mb-4 text-center">
                    <div class="mb-3">
                        <div class="rounded-circle bg-warning bg-opacity-10 mx-auto"
                            style="width: 120px; height: 120px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-person-circle text-warning" style="font-size: 3rem;"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold">Jean Dupont</h5>
                    <p class="text-muted small">Responsable atelier</p>
                </div>

                <div class="col-md-4 mb-4 text-center">
                    <div class="mb-3">
                        <div class="rounded-circle bg-info bg-opacity-10 mx-auto"
                            style="width: 120px; height: 120px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-person-circle text-info" style="font-size: 3rem;"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold">Sophie Laurent</h5>
                    <p class="text-muted small">Coach experience client</p>
                </div>
            </div>
        </section>
    </div>
@endsection