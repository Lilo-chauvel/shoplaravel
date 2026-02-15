@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <div class="container-lg py-5">
        <section class="text-center mb-5">
            <h1 class="display-4 fw-bold mb-3">Nos categories</h1>
            <p class="lead text-muted">Des univers clairs pour trouver le velo parfait.</p>
        </section>

        <div class="card border-0 shadow-sm">
            <div class="table-responsive">
                <table class="table table-striped align-middle mb-0">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Categorie</th>
                            <th scope="col">Description</th>
                            <th scope="col" class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description ? Str::limit($category->description, 80) : '-' }}</td>
                                <td class="text-end">
                                    <a href="{{ route('admin.categories.edit', $category->id) }}"
                                        class="btn btn-outline-secondary btn-sm">
                                        <i class="bi bi-pencil icon-sm"></i>
                                    </a>
                                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">
                                            <i class="bi bi-trash icon-sm"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-4 text-muted">Aucune categorie disponible.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection