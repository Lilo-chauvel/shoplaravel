@extends('layouts.app')

@section('title', 'Inscription')

@section('content')
    <div class="d-flex flex-column">
        <form action="{{ route('loginValid') }}" method="POST">
            @csrf
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}">
                @error('email')
                    <p style="color:red">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" value="{{ old('password') }}">
                @error('password')
                    <p style="color:red">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="remember">Se souvenir de moi</label>
                <input type="checkbox" name="remember" id="remember">
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
@endsection