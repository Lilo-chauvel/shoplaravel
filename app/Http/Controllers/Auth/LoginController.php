<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate(
            [
                'email' => 'required|email|max:255',
                'password' => 'required',
            ],
            [
                'email.required' => 'L\'email est requis',
                'email.email' => 'Veuillez enter un email valide',
                'email.max:255' => 'Email trop long',
                'password.required' => 'Le mot de passe est requis',
            ]
        );
        if (Auth::attempt($credentials,$request->boolean('remember'))){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }else{
            return back()->withErrors('Vous n\'avez pas entré le bon email ou mot de passe.')->onlyInput('email');
        }
    }
}
