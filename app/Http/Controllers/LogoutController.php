<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        // Déconnexion de l'utilisateur

        $user = Auth::user();
        $user->actif = false;
        $user->save();
        Auth::logout();

        // Redirection vers la page de connexion
        return redirect('/login');
    }
}
