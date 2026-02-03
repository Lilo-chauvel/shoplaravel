<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ShopLaravel - Bienvenue</title>
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --bs-font-sans-serif: 'Inter', sans-serif;
        }
        
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #0066cc, #6600cc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .btn-gradient {
            background: linear-gradient(135deg, #0066cc, #6600cc);
            border: none;
            color: white;
            transition: all 0.3s ease;
        }
        
        .btn-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 102, 204, 0.3);
            color: white;
        }
        
        .feature-card {
            transition: all 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top border-bottom">
        <div class="container-lg">
            <a class="navbar-brand fw-bold gradient-text" href="/">
                <i class="bi bi-shop me-2"></i>ShopLaravel
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="ms-auto d-flex gap-3 align-items-center">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-gradient btn-sm">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm">
                                Connexion
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-gradient btn-sm">
                                    Inscription
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="py-5 py-lg-6">
        <div class="container-lg text-center">
            <h1 class="display-3 fw-bold mb-4">
                Bienvenue chez <span class="gradient-text">ShopLaravel</span>
            </h1>
            <p class="lead text-muted mb-4 mx-auto" style="max-width: 600px;">
                Découvrez une expérience d'achat en ligne moderne et épurée, propulsée par la puissance de Laravel.
            </p>
            <div class="d-flex flex-wrap gap-3 justify-content-center">
                <a href="{{ route('home') }}" class="btn btn-gradient btn-lg">
                    <i class="bi bi-arrow-right me-2"></i>Commencer
                </a>
                <a href="{{ route('products.index') }}" class="btn btn-outline-primary btn-lg">
                    <i class="bi bi-bag me-2"></i>Voir les produits
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5 py-lg-6 bg-light">
        <div class="container-lg">
            <h2 class="text-center fw-bold mb-5 display-5">Nos avantages</h2>
            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 h-100 feature-card">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="bi bi-star-fill text-warning" style="font-size: 2.5rem;"></i>
                            </div>
                            <h5 class="card-title fw-bold">Qualité Premium</h5>
                            <p class="card-text text-muted">Sélection rigoureuse de produits de haute qualité pour votre satisfaction.</p>
                        </div>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 h-100 feature-card">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="bi bi-headset text-primary" style="font-size: 2.5rem;"></i>
                            </div>
                            <h5 class="card-title fw-bold">Service Client</h5>
                            <p class="card-text text-muted">Équipe disponible 24/7 pour répondre à toutes vos questions.</p>
                        </div>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 h-100 feature-card">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="bi bi-lightning-charge text-success" style="font-size: 2.5rem;"></i>
                            </div>
                            <h5 class="card-title fw-bold">Livraison Rapide</h5>
                            <p class="card-text text-muted">Livraison fiable et rapide à votre porte en quelques jours.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5 py-lg-6">
        <div class="container-lg">
            <div class="bg-gradient text-white rounded-3 p-5 p-lg-6" style="background: linear-gradient(135deg, #0066cc, #6600cc);">
                <h2 class="text-center fw-bold mb-5">Nos chiffres</h2>
                <div class="row text-center g-4">
                    <div class="col-md-4">
                        <h3 class="display-4 fw-bold mb-2">10K+</h3>
                        <p class="fs-5 opacity-75">Clients satisfaits</p>
                    </div>
                    <div class="col-md-4">
                        <h3 class="display-4 fw-bold mb-2">50K+</h3>
                        <p class="fs-5 opacity-75">Produits disponibles</p>
                    </div>
                    <div class="col-md-4">
                        <h3 class="display-4 fw-bold mb-2">99.9%</h3>
                        <p class="fs-5 opacity-75">Taux de satisfaction</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 py-lg-6 bg-light">
        <div class="container-lg text-center">
            <h2 class="fw-bold mb-4 display-5">Prêt à commencer ?</h2>
            <p class="lead text-muted mb-4 mx-auto" style="max-width: 600px;">
                Explorez notre collection complète et trouvez exactement ce que vous cherchez.
            </p>
            <a href="{{ route('home') }}" class="btn btn-gradient btn-lg">
                <i class="bi bi-shop me-2"></i>Visiter la boutique
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5 mt-5">
        <div class="container-lg">
            <div class="row g-4 mb-4">
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3">ShopLaravel</h5>
                    <p class="text-muted">Votre boutique en ligne moderne et épurée.</p>
                </div>
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3">Navigation</h5>
                    <ul class="list-unstyled space-y-2">
                        <li><a href="{{ route('home') }}" class="text-muted text-decoration-none">Accueil</a></li>
                        <li><a href="{{ route('products.index') }}" class="text-muted text-decoration-none">Produits</a></li>
                        <li><a href="{{ route('about') }}" class="text-muted text-decoration-none">À propos</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3">Contact</h5>
                    <p class="text-muted mb-1">Email: info@shoplaravel.com</p>
                    <p class="text-muted">Tél: +33 (0)1 23 45 67 89</p>
                </div>
            </div>
            <hr class="bg-secondary">
            <div class="text-center text-muted">
                <p>&copy; {{ date('Y') }} ShopLaravel. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
