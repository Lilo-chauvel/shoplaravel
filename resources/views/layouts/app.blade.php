<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'VeloSprint')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.0/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
            --brand-border: #e2e8e4;
            --bs-body-font-family: 'Source Sans 3', ui-sans-serif, system-ui, sans-serif;
            --bs-primary: var(--brand-forest);
            --bs-secondary: var(--brand-moss);
            --bs-warning: var(--brand-amber);
            --bs-body-bg: var(--brand-sand);
            --bs-body-color: var(--brand-ink);
        }

        body {
            font-family: 'Source Sans 3', ui-sans-serif, system-ui, sans-serif;
            background: radial-gradient(circle at top right, rgba(31, 122, 98, 0.14), transparent 55%),
                linear-gradient(180deg, #fdfbf6 0%, var(--brand-sand) 50%, #f1f5f2 100%);
            color: var(--brand-ink);
        }

        .navbar-brand {
            font-family: 'Bebas Neue', 'Source Sans 3', sans-serif;
            font-weight: 700;
            font-size: 1.75rem;
            letter-spacing: 0.06em;
            color: var(--brand-ink);
        }

        .gradient-text {
            background: linear-gradient(135deg, var(--brand-forest), var(--brand-amber));
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
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 18px 40px rgba(15, 31, 26, 0.12);
            transform: translateY(-6px);
        }

        .btn-gradient {
            background: linear-gradient(135deg, var(--brand-forest), var(--brand-amber));
            border: none;
            color: #fff;
            font-weight: 600;
            box-shadow: 0 12px 30px rgba(15, 31, 26, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-gradient:hover {
            transform: translateY(-2px);
            color: #fff;
            box-shadow: 0 18px 40px rgba(15, 31, 26, 0.18);
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
                <i class="bi bi-bicycle me-2"></i>VeloSprint
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
                        <a class="nav-link" href="{{ route('products.index') }}">Velos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">A propos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Flash Messages -->
    @php
        $flashSuccess = session('success');
        $flashError = session('error');

        if (!$flashSuccess && session('newProductName') && session('color') === 'bg-success') {
            $flashSuccess = session('newProductName');
        }

        if (!$flashError && session('newProductName') && session('color') === 'bg-danger') {
            $flashError = session('newProductName');
        }
    @endphp

    @if ($flashSuccess || $flashError || $errors->any())
        <div class="alert-container position-fixed top-0 start-50 translate-middle-x mt-5 pt-3" style="z-index: 9999;">
            @if ($flashSuccess)
                <div class="alert alert-dismissible fade show shadow-lg border-0 alert-success" role="alert"
                    style="animation: slideDown 0.5s ease-out;">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-check-circle-fill me-3" style="font-size: 1.5rem;"></i>
                        <div class="flex-grow-1">
                            <strong>Succès !</strong>
                            <p class="mb-0 mt-1">{{ $flashSuccess }}</p>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif

            @if ($flashError)
                <div class="alert alert-dismissible fade show shadow-lg border-0 alert-danger" role="alert"
                    style="animation: slideDown 0.5s ease-out;">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-exclamation-triangle-fill me-3" style="font-size: 1.5rem;"></i>
                        <div class="flex-grow-1">
                            <strong>Erreur !</strong>
                            <p class="mb-0 mt-1">{{ $flashError }}</p>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-dismissible fade show shadow-lg border-0 alert-danger" role="alert"
                    style="animation: slideDown 0.5s ease-out;">
                    <div class="d-flex align-items-start">
                        <i class="bi bi-exclamation-triangle-fill me-3" style="font-size: 1.5rem;"></i>
                        <div class="flex-grow-1">
                            <strong>Erreurs de validation</strong>
                            <ul class="mb-0 mt-2 ps-3">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif
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

        .alert-container {
            width: min(600px, calc(100% - 2rem));
        }

        .alert-container .alert {
            border-radius: 12px;
        }

        .alert-container .alert+.alert {
            margin-top: 0.75rem;
        }

        .alert-success {
            background: linear-gradient(135deg, rgba(20, 90, 75, 0.2) 0%, rgba(31, 122, 98, 0.2) 100%);
            color: #0f1f1a;
            border-left: 4px solid #1f7a62;
        }

        .alert-danger {
            background: linear-gradient(135deg, rgba(255, 138, 31, 0.2) 0%, rgba(255, 138, 31, 0.1) 100%);
            color: #3b1c00;
            border-left: 4px solid #ff8a1f;
        }
    </style>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="border-top mt-5" style="background: #0f1f1a; color: #fff;">
        <div class="container-lg py-5">
            <div class="row mb-4">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="text-white">VeloSprint</h5>
                    <p class="text-white-50">Boutique velo sportive, performance et design pour chaque sortie.</p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h6>Navigation</h6>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}" class="text-decoration-none text-white-50">Accueil</a></li>
                        <li><a href="{{ route('products.index') }}" class="text-decoration-none text-white-50">Velos</a>
                        </li>
                        <li><a href="{{ route('about') }}" class="text-decoration-none text-white-50">A propos</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h6>Contact</h6>
                    <p class="text-white-50 small">
                        Email: hello@velosprint.fr<br>
                        Tel: +33 (0)1 45 82 19 90
                    </p>
                </div>
            </div>
            <hr class="border-secondary">
            <div class="text-center text-white-50 small">
                <p>&copy; {{ date('Y') }} VeloSprint. Tous droits reserves. | Pedalez plus vite, plus loin.</p>
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