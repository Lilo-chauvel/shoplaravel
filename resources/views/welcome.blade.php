<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VeloSprint - Bienvenue</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Source+Sans+3:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --brand-ink: #0f1f1a;
            --brand-forest: #145a4b;
            --brand-moss: #1f7a62;
            --brand-amber: #ff8a1f;
            --brand-sand: #f6f4ef;
            --brand-ice: #f2f7f5;
        }

        body {
            font-family: 'Source Sans 3', ui-sans-serif, system-ui, sans-serif;
            background: radial-gradient(circle at top right, rgba(31, 122, 98, 0.14), transparent 55%),
                linear-gradient(180deg, #fdfbf6 0%, var(--brand-sand) 50%, #f1f5f2 100%);
            color: var(--brand-ink);
        }

        h1,
        h2,
        h3,
        .display-1,
        .display-2,
        .display-3,
        .display-4,
        .display-5,
        .display-6 {
            font-family: 'Bebas Neue', 'Source Sans 3', sans-serif;
            letter-spacing: 0.03em;
        }

        .gradient-text {
            background: linear-gradient(135deg, var(--brand-forest), var(--brand-amber));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .btn-gradient {
            background: linear-gradient(135deg, var(--brand-forest), var(--brand-amber));
            border: none;
            color: white;
            transition: all 0.3s ease;
            box-shadow: 0 12px 30px rgba(15, 31, 26, 0.1);
        }

        .btn-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 18px 40px rgba(15, 31, 26, 0.18);
            color: white;
        }

        .feature-card {
            transition: all 0.3s ease;
            border-radius: 18px;
        }

        .feature-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 40px rgba(15, 31, 26, 0.12);
        }

        .hero-splash {
            background: linear-gradient(135deg, rgba(20, 90, 75, 0.95), rgba(31, 122, 98, 0.9));
            color: white;
            border-radius: 30px;
            position: relative;
            overflow: hidden;
        }

        .hero-splash::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: radial-gradient(circle at 20% 20%, rgba(255, 138, 31, 0.25), transparent 35%),
                radial-gradient(circle at 80% 10%, rgba(255, 255, 255, 0.2), transparent 40%),
                radial-gradient(circle at 10% 80%, rgba(255, 255, 255, 0.12), transparent 40%);
        }

        .hero-splash>* {
            position: relative;
            z-index: 1;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top border-bottom">
        <div class="container-lg">
            <a class="navbar-brand fw-bold gradient-text" href="/">
                <i class="bi bi-bicycle me-2"></i>VeloSprint
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
        <div class="container-lg text-center hero-splash py-5 px-4 px-lg-5">
            <div class="text-uppercase" style="letter-spacing: 0.3em; font-size: 0.75rem;">Velos sportifs</div>
            <h1 class="display-3 fw-bold mb-4">
                Bienvenue chez <span class="gradient-text">VeloSprint</span>
            </h1>
            <p class="lead text-white-50 mb-4 mx-auto" style="max-width: 600px;">
                Des velos legers, rapides et precis. Trouvez votre cadence ideale, du bitume au gravel.
            </p>
            <div class="d-flex flex-wrap gap-3 justify-content-center">
                <a href="{{ route('home') }}" class="btn btn-gradient btn-lg">
                    <i class="bi bi-arrow-right me-2"></i>Commencer
                </a>
                <a href="{{ route('products.index') }}" class="btn btn-outline-light btn-lg">
                    <i class="bi bi-bicycle me-2"></i>Voir les velos
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5 py-lg-6">
        <div class="container-lg">
            <h2 class="text-center fw-bold mb-5 display-5">Pourquoi pedaler avec nous</h2>
            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 h-100 feature-card">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="bi bi-speedometer2 text-warning" style="font-size: 2.5rem;"></i>
                            </div>
                            <h5 class="card-title fw-bold">Performance sans compromis</h5>
                            <p class="card-text text-muted">Cadres vifs, freinage net, rendement immediat.</p>
                        </div>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 h-100 feature-card">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="bi bi-tools text-primary" style="font-size: 2.5rem;"></i>
                            </div>
                            <h5 class="card-title fw-bold">Atelier expert</h5>
                            <p class="card-text text-muted">Montage soigne, reglages sur mesure avant depart.</p>
                        </div>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 h-100 feature-card">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="bi bi-geo-alt text-success" style="font-size: 2.5rem;"></i>
                            </div>
                            <h5 class="card-title fw-bold">Ressenti de terrain</h5>
                            <p class="card-text text-muted">Selections testees sur route, gravel et urbain sportif.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5 py-lg-6">
        <div class="container-lg">
            <div class="hero-splash text-white rounded-3 p-5 p-lg-6">
                <h2 class="text-center fw-bold mb-5">Nos chiffres</h2>
                <div class="row text-center g-4">
                    <div class="col-md-4">
                        <h3 class="display-4 fw-bold mb-2">12K+</h3>
                        <p class="fs-5 opacity-75">Cyclistes accompagnes</p>
                    </div>
                    <div class="col-md-4">
                        <h3 class="display-4 fw-bold mb-2">320</h3>
                        <p class="fs-5 opacity-75">Modeles en stock</p>
                    </div>
                    <div class="col-md-4">
                        <h3 class="display-4 fw-bold mb-2">98%</h3>
                        <p class="fs-5 opacity-75">Taux de satisfaction</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 py-lg-6">
        <div class="container-lg text-center">
            <h2 class="fw-bold mb-4 display-5">Pret a accelerer ?</h2>
            <p class="lead text-muted mb-4 mx-auto" style="max-width: 600px;">
                Explorez nos velos de sport, ajustez votre position, passez a la vitesse superieure.
            </p>
            <a href="{{ route('home') }}" class="btn btn-gradient btn-lg">
                <i class="bi bi-bicycle me-2"></i>Visiter la boutique
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5 mt-5">
        <div class="container-lg">
            <div class="row g-4 mb-4">
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3">VeloSprint</h5>
                    <p class="text-muted">Boutique velo sportive, performance et design.</p>
                </div>
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3">Navigation</h5>
                    <ul class="list-unstyled space-y-2">
                        <li><a href="{{ route('home') }}" class="text-muted text-decoration-none">Accueil</a></li>
                        <li><a href="{{ route('products.index') }}" class="text-muted text-decoration-none">Velos</a>
                        </li>
                        <li><a href="{{ route('about') }}" class="text-muted text-decoration-none">A propos</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3">Contact</h5>
                    <p class="text-muted mb-1">Email: hello@velosprint.fr</p>
                    <p class="text-muted">Tel: +33 (0)1 45 82 19 90</p>
                </div>
            </div>
            <hr class="bg-secondary">
            <div class="text-center text-muted">
                <p>&copy; {{ date('Y') }} VeloSprint. Tous droits reserves.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>