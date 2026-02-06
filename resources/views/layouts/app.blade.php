<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ShopLaravel')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.0/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bs-body-font-family: 'Inter', sans-serif;
            --bs-primary: #0d6efd;
            --bs-secondary: #6f42c1;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            background: linear-gradient(135deg, #0d6efd, #6f42c1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .gradient-text {
            background: linear-gradient(135deg, #0d6efd, #6f42c1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .icon-sm {
            width: 20px;
            height: 20px;
        }

        .icon-md {
            width: 32px;
            height: 32px;
        }

        .icon-lg {
            width: 48px;
            height: 48px;
        }

        .card {
            border: none;
            transition: all 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            transform: translateY(-5px);
        }

        .btn-gradient {
            background: linear-gradient(135deg, #0d6efd, #6f42c1);
            border: none;
            color: white;
            font-weight: 600;
        }

        .btn-gradient:hover {
            background: linear-gradient(135deg, #0b5ed7, #59359a);
            color: white;
        }
    </style>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top border-bottom">
        <div class="container-lg">
            <a class="navbar-brand" href="{{ route('home') }}">
                ShopLaravel
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">Produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">À propos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Flash Messages -->
    @if (session('newProductName'))
        <div class="alert-container position-fixed top-0 start-50 translate-middle-x mt-5 pt-3"
            style="z-index: 9999; min-width: 400px; max-width: 600px;">
            <div class="alert alert-dismissible fade show shadow-lg border-0 {{ session('color') === 'bg-success' ? 'alert-success' : 'alert-danger' }}"
                role="alert" style="animation: slideDown 0.5s ease-out;">
                <div class="d-flex align-items-center">
                    @if(session('color') === 'bg-success')
                        <i class="bi bi-check-circle-fill me-3" style="font-size: 1.5rem;"></i>
                    @else
                        <i class="bi bi-exclamation-triangle-fill me-3" style="font-size: 1.5rem;"></i>
                    @endif
                    <div class="flex-grow-1">
                        <strong>{{ session('color') === 'bg-success' ? 'Succès !' : 'Erreur !' }}</strong>
                        <p class="mb-0 mt-1">{{ session('newProductName') }}</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    @endif

    <style>
        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .alert-container .alert {
            border-radius: 12px;
        }

        .alert-success {
            background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
            color: #155724;
            border-left: 4px solid #28a745;
        }

        .alert-danger {
            background: linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%);
            color: #721c24;
            border-left: 4px solid #dc3545;
        }
    </style>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-light border-top mt-5">
        <div class="container-lg py-5">
            <div class="row mb-4">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="gradient-text">ShopLaravel</h5>
                    <p class="text-muted">Votre boutique en ligne moderne et épurée, propulsée par Laravel.</p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h6>Navigation</h6>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}" class="text-decoration-none text-muted">Accueil</a></li>
                        <li><a href="{{ route('products.index') }}" class="text-decoration-none text-muted">Produits</a>
                        </li>
                        <li><a href="{{ route('about') }}" class="text-decoration-none text-muted">À propos</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h6>Contact</h6>
                    <p class="text-muted small">
                        Email: info@shoplaravel.com<br>
                        Tél: +33 (0)1 23 45 67 89
                    </p>
                </div>
            </div>
            <hr>
            <div class="text-center text-muted small">
                <p>&copy; {{ date('Y') }} ShopLaravel. Tous droits réservés. | Fait avec ❤️ par Laravel</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- Auto-close flash messages -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const alerts = document.querySelectorAll('.alert-container .alert');
            alerts.forEach(function (alert) {
                // Auto-close after 5 seconds
                setTimeout(function () {
                    const bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                }, 5000);
            });
        });
    </script>
</body>

</html>