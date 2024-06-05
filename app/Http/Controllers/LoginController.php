<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function loginForm()
    {
        return view('Authentification.login');
    }

    public function login(Request $request)
    {
        // Valider les données du formulaire
        $credentials = $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        // Vérifier les informations de connexion
        if (Auth::attempt($credentials)) {
            // Connecter l'utilisateur
            $request->session()->regenerate();
            $user = Auth::user();
            $user->actif = true;
            $user->save();
            // Rediriger l'utilisateur vers la page d'accueil ou une page sécurisée
            return redirect()->intended('');
        }

        // Si les informations de connexion sont invalides, renvoyer une erreur
        return back()->withErrors([
            'login' => 'Les identifiants fournis sont incorrects.',
        ])->onlyInput('login');
    }

}
