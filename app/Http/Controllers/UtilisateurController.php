<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
class UtilisateurController extends Controller
{
    // Affiche la liste des utilisateurs
    public function index()
    {
        $utilisateurs = Utilisateur::all();
        return view('Utilisateurs.index', compact('utilisateurs'));
    }

    // Affiche le formulaire pour créer un nouvel utilisateur
    public function create()
    {
        return view('Utilisateurs.create');
    }

    // Enregistre un nouvel utilisateur
    public function store(Request $request)
    {
        Utilisateur::create($request->all());
        return redirect()->route('utilisateurs.index');
    }

   // Affiche les détails d'un utilisateur spécifique
public function show(Utilisateur $utilisateur)
{
    if (!$utilisateur) {
        abort(404); // Retourne une erreur 404 si l'utilisateur n'est pas trouvé
    }
    return view('Utilisateurs.show', compact('utilisateur'));
}


    // Affiche le formulaire pour modifier un utilisateur
    public function edit(Utilisateur $utilisateur)
    {
        return view('Utilisateurs.edit', compact('utilisateur'));
    }

    // Met à jour un utilisateur spécifique
    public function update(Request $request, Utilisateur $utilisateur)
    {
        $utilisateur->update($request->all());
        return redirect()->route('utilisateurs.index');
    }

    // Supprime un utilisateur spécifique
    public function destroy(Utilisateur $utilisateur)
    {
        $utilisateur->delete();
        return redirect()->route('utilisateurs.index');
    }
}
