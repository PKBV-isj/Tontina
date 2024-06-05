<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function home()
    {
        $viewData = [];
        $viewData["title"] = "Tontine";
        $viewData["subtitle"] = "Home";
        $user = User::all();
        return view('Authentification.home', compact('user'))->with("viewData", $viewData);
    }

    public function adduser(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'login' => 'required',
            'password' => 'required|min:5',
            'password1' => 'required|same:password',
        ]);

        $user = new User;
        $user->nom = $validatedData['nom'];
        $user->login = $validatedData['login'];
        $user->password = bcrypt($validatedData['password']);
        $user->anneeEntree = $request->input('anneeEntree');
        $user->nbDeFemmes = $request->input('nbDeFemmes');
        $user->role = $request->input('role');
        $user->save();

        /*$viewData = [];
        $viewData["title"] = "Tontine";
        $viewData["subtitle"] = "Home";*/

        return redirect()->route('admin.home')->with('success', 'Membre créé avec succès');


    }
}
