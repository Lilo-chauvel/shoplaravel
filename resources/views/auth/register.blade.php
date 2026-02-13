@extends('layouts.app')

@section('title', 'Page d\inscription')

@section('content')
        <div class="d-flex flex-column">
            <form action="" method="POST">
                @csrf
                <div>
                    <label for="name">Nom</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}">
                    @error('name')
                        <p class="color:red">error</p> 
                    @enderror
    {{-- 
                    'name.string' => 'Le nom doit être de type string',
                    'name.max:255' => 'Nom trop long',
                    'email.required' => 'L\'email est requis',
                    'email.email' => 'Veuillez enter un email valide',
                    'email.max:255' => 'Email trop long',
                    'password.required' => 'Le mot de passe est requis',
                    'password.confirmed' => 'Le mot de passe est requis', --}}
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
                    <input type="password" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}">
                @error('password_confirmation')
                    <p class="font-color:red">error</p>
                @enderror
                </div>
                <button type="submit">Valider</button>
            </form>
        </div>
@endsection