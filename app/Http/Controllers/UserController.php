<?php

namespace App\Http\Controllers;

use Error;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register()
    {

        return view('auth.register');
    }
    public function registerValidation(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ],
        [
            'name.required' => 'Le nom est requis',
            'name.string' => 'Le nom doit être de type string',
            'name.max:255' => 'Nom trop long',
            'email.required' => 'L\'email est requis',
            'email.email' => 'Veuillez enter un email valide',
            'email.max:255' => 'Email trop long',
            'password.required' => 'Le mot de passe est requis',
            'password.confirmed' => 'Le mot de passe est requis',
        ]);
        if($request->password != $request->password_confirmation ){
            session(['error'=> 'Merci d\'écrire deux fois le même mot de passe']);
            return view('auth.register');
        }else{
            return view('auth.connexion');
        }
    }
}
