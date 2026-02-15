@extends('layouts.app')

@section('title', 'Mettre a jour une categorie')

@section('content')
    <div class="container py-5">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
                <li class="breadcrumb-item active" aria-current="page">Mettre a jour une categorie</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <form action="{{ route('admin.categories.update', $category) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-4">
                                <label for="name" class="form-label fw-semibold">
                                    <i class="bi bi-type me-2 text-primary"></i>Nom de la categorie
                                </label>
                                <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Ex: Route"
                                    required>
                                @error('name')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="description" class="form-label fw-semibold">
                                    <i class="bi bi-chat-dots me-2 text-primary"></i>Description
                                </label>
                                <textarea name="description" id="description" rows="4"
                                    class="form-control @error('description') is-invalid @enderror"
                                    placeholder="Usage, style, caracteristiques...">{{ old('description', $category->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <hr class="my-4">

                            <div class="d-grid gap-2 d-md-flex justify-content-md-between">
                                <div class="d-flex gap-2">
                                    <a href="/categories" class="btn btn-outline-secondary btn-lg">
                                        <i class="bi bi-arrow-left me-2"></i>Retour
                                    </a>
                                </div>
                                <div class="d-flex gap-2">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="bi bi-check-circle me-2"></i>Mettre a jour
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="alert alert-info mt-4 border-0" role="alert">
                    <div class="d-flex">
                        <i class="bi bi-info-circle me-3" style="font-size: 1.5rem;"></i>
                        <div>
                            <strong>Besoin d'aide ?</strong>
                            <p class="mb-0 mt-1">Changer le nom met automatiquement a jour le slug.</p>
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
            color: #145a4b;
            text-decoration: none;
        }

        .breadcrumb-item a:hover {
            text-decoration: underline;
        }

        .form-control,
        .form-control:focus {
            border-color: #dee2e6;
            box-shadow: 0 0 0 0.2rem rgba(20, 90, 75, 0.15);
        }

        .form-control:focus {
            border-color: #145a4b;
        }

        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
    </style>
@endsection