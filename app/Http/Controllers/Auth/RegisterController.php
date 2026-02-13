<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showForm()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $validated = $request->validate(
            [
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:users,email',
                'password' => 'required|confirmed|min:8',
            ],
            [
                'last_name.required' => 'Le nom de famille est requis',
                'last_name.string' => 'Le nom de famille doit être de type string',
                'last_name.max:255' => 'Nom de famille trop long',
                'first_name.required' => 'Le prénom est requis',
                'first_name.string' => 'Le prénom doit être de type string',
                'first_name.max:255' => 'Prénom trop long',
                'email.required' => 'L\'email est requis',
                'email.email' => 'Veuillez enter un email valide',
                'email.max:255' => 'Email trop long',
                'email.unique' => 'Cette email existe déjà',
                'password.required' => 'Le mot de passe est requis',
                'password.min:8' => 'Le mot de passe est trop court',
                'password.confirmed' => 'Merci d\'entrer deux fois le même mot de passe',
            ]
        );
            $validated['is_admin'] = false;
            $validated['password'] = Hash::make($validated['password']);
            $user = User::create($validated);
            Auth::login($user);
            
            return redirect()->route('home')->with('success', 'Votre compte a bien été créé.');
    }
}
