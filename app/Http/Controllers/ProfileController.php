<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function Home()
    {
        $viewData = [];
        $viewData["title"] = "Profile";
        $viewData["subtitle"] = "Home";
        $user = Auth::user();
        return view('profile.profile', compact('user'))->with("viewData", $viewData);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'nom' => 'required|string|max:30',
            'prenom' => 'nullable|string|max:30',
            'anneeNais' => 'nullable|date',
            'nbDeFemmes' => 'required|integer|min:0',
            #'login' => 'required|string|max:50|unique:users,login',
            #'password' => 'required|string|min:8',
            'sexe' => 'required|string|in:M,F',
            'nomEpoux' => 'nullable|string|max:50',
            'telephone1' => 'nullable|string|max:15',
            'telephone2' => 'nullable|string|max:15',
            'email' => 'nullable|email|max:255|unique:users,email',
            'photo' => 'nullable|image|max:2048',
        ]);

        $user->nom = $request->input('nom');
        $user->prenom = $request->input('prenom');
        $user->anneeNais = $request->input('anneeNais');
        $user->nbDeFemmes = $request->input('nbDeFemmes');
        #$user->login = $request->input('login');
        #$user->password = bcrypt($request->input('password'));
        $user->sexe = $request->input('sexe');
        $user->nomEpoux = $request->input('nomEpoux');
        $user->telephone1 = $request->input('telephone1');
        $user->telephone2 = $request->input('telephone2');
        $user->email = $request->input('email');

        if ($request->hasFile('photo')) {
            $user->photo = $request->file('photo')->store('photos_Profile', 'public');
        }

        $user->save();

        return redirect()->route('profile.home', $user->id)->with('success', 'Votre profil a été mis à jour avec succès.');
    }
}
