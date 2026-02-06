    @extends('layouts.app')

    @section('title', 'Créer un produit')

    @section('content')
        <div class="container py-5">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="/products">Produits</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Créer un produit</li>
                </ol>
            </nav>

            <!-- Page Header -->


            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <!-- Form Card -->
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4">
                            <form action="{{ route('products.store') }}" method="POST">
                                @csrf

                                <!-- Nom -->
                                <div class="mb-4">
                                    <label for="name" class="form-label fw-semibold">
                                        <i class="bi bi-type me-2 text-primary"></i>Nom du produit
                                    </label>
                                    <input type="text" 
                                        name="name" 
                                        id="name" 
                                        value="{{ old('name') }}" 
                                        class="form-control @error('name') is-invalid @enderror"
                                        placeholder="Ex: Laptop Dell XPS 13"
                                        required>
                                    @error('name')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Description -->
                                <div class="mb-4">
                                    <label for="description" class="form-label fw-semibold">
                                        <i class="bi bi-chat-dots me-2 text-primary"></i>Description
                                    </label>
                                    <textarea name="description" 
                                            id="description" 
                                            rows="4" 
                                            class="form-control @error('description') is-invalid @enderror"
                                            placeholder="Décrivez votre produit en détail..."
                                            required>{{ old('description') }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Price and Stock Row -->
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label for="price" class="form-label fw-semibold">
                                            <i class="bi bi-currency-euro me-2 text-primary"></i>Prix (€)
                                        </label>
                                        <div class="input-group">
                                            <input type="number" 
                                                name="price" 
                                                id="price" 
                                                value="{{ old('price') }}" 
                                                class="form-control @error('price') is-invalid @enderror"
                                                placeholder="0.00"
                                                step="0.01"
                                                min="0"
                                                required>
                                            <span class="input-group-text bg-light">€</span>
                                            @error('price')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label for="stock" class="form-label fw-semibold">
                                            <i class="bi bi-box me-2 text-primary"></i>Stock
                                        </label>
                                        <input type="number" 
                                            name="stock" 
                                            id="stock" 
                                            value="{{ old('stock') }}" 
                                            class="form-control @error('stock') is-invalid @enderror"
                                            placeholder="Quantité disponible"
                                            min="0"
                                            required>
                                        @error('stock')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Active Checkbox -->
                                <div class="mb-4">
                                    <div class="form-check form-switch p-0">
                                        <input type="hidden" name="active" value="0">
                                        <input class="form-check-input" 
                                            type="checkbox" 
                                            name="active" 
                                            id="active" 
                                            value="1"
                                            {{ old('active') ? 'checked' : '' }}>
                                        <label class="form-check-label fw-semibold ms-2" for="active">
                                            <i class="bi bi-toggle2-on me-2 text-success"></i>Produit actif
                                        </label>
                                        <small class="d-block text-muted mt-1 ms-4">Activez cette option pour rendre le produit visible dans votre boutique</small>
                                    </div>
                                </div>

                                <hr class="my-4">

                                <!-- Action Buttons -->
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a href="/products" class="btn btn-outline-secondary btn-lg">
                                        <i class="bi bi-arrow-left me-2"></i>Annuler
                                    </a>
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="bi bi-check-circle me-2"></i>Créer le produit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Help Section -->
                    <div class="alert alert-info mt-4 border-0" role="alert">
                        <div class="d-flex">
                            <i class="bi bi-info-circle me-3" style="font-size: 1.5rem;"></i>
                            <div>
                                <strong>Besoin d'aide ?</strong>
                                <p class="mb-0 mt-1">Assurez-vous que tous les champs sont correctement remplis. Le produit sera ajouté à votre catalogue une fois le formulaire validé.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .breadcrumb {
                background: transparent;
                padding: 0;
            }

            .breadcrumb-item a {
                color: #0d6efd;
                text-decoration: none;
            }

            .breadcrumb-item a:hover {
                text-decoration: underline;
            }

            .form-control, .form-control:focus {
                border-color: #dee2e6;
                box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.15);
            }

            .form-control:focus {
                border-color: #0d6efd;
            }

            .card {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .input-group .form-control:focus {
                box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.15);
            }
        </style>

    @endsection