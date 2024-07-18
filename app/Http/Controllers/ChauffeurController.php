<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chauffeur;

class ChauffeurController extends Controller
{
    // Affiche la liste des chauffeurs
    public function index()
    {
        $chauffeurs = Chauffeur::all();
        return view('Chauffeur.index', compact('chauffeurs'));
    }

    // Affiche le formulaire pour créer un nouveau chauffeur
    public function create()
    {
        return view('Chauffeur.create');
    }

    // Enregistre un nouveau chauffeur
    public function store(Request $request)
    {
        Chauffeur::create($request->all());
        return redirect()->route('chauffeurs.index');
    }

    // Affiche les détails d'un chauffeur spécifique
    public function show(Chauffeur $chauffeur)
    {
        if (!$chauffeur) {
            abort(404); // Retourne une erreur 404 si le chauffeur n'est pas trouvé
        }
        return view('Chauffeur.show', compact('chauffeur'));
    }

    // Affiche le formulaire pour modifier un chauffeur
    public function edit(Chauffeur $chauffeur)
    {
        return view('Chauffeur.edit', compact('chauffeur'));
    }

    // Met à jour un chauffeur spécifique
    public function update(Request $request, Chauffeur $chauffeur)
    {
        $chauffeur->update($request->all());
        return redirect()->route('chauffeurs.index');
    }

    // Supprime un chauffeur spécifique
    public function destroy(Chauffeur $chauffeur)
    {
        $chauffeur->delete();
        return redirect()->route('chauffeurs.index');
    }
    
}
