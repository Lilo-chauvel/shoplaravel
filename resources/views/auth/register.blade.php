@extends('layouts.app')

@section('title', 'Page d\inscription')

@section('content')
    <div class="d-flex flex-column">
        <form action="" method="POST">
            @csrf
            <div>
                <label for="first_name">Prénom</label>
                <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}">
                @error('first_name')
                    <p class="color:red">error</p>
                @enderror
            </div>
            <div>
                <label for="last_name">Nom</label>
                <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}">
                @error('last_name')
                    <p class="color:red">error</p>
                @enderror
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}">
                @error('email')
                    <p class="color:red">error</p>
                @enderror
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" value="{{ old('password') }}">
                @error('password')
                    <p class="color:red">error</p>
                @enderror
            </div>
            <div>
                <label for="password_confirmation">Confirmation</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    value="{{ old('password_confirmation') }}">
                @error('password_confirmation')
                    <p class="font-color:red">error</p>
                @enderror
            </div>
            <button type="submit">Valider</button>
        </form>
    </div>
@endsection