<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicule;
use App\Models\TypeVehicule;
use App\Models\Service;



class VehiculeController extends Controller
{

    // Affiche la liste des véhicules
    public function index()
    {
        $vehicules = Vehicule::all(); // Utilisation du modèle Vehicule
        return view('Vehicule.index', compact('vehicules')); // Utilisation de la vue vehicule.index
    }

    // Affiche le formulaire pour créer un nouveau véhicule
    public function create()
    {
        $vehicules = Vehicule::all();
        $services = Service::all();
        $typeVehicules  = TypeVehicule::all();
        return view('vehicule.create', compact('vehicules', 'services','typeVehicules'));
        
    }

    // Enregistre un nouveau véhicule
    public function store(Request $request)
    {
        Vehicule::create($request->all()); // Utilisation du modèle Vehicule
       
        return redirect()->route('vehicules.index'); // Redirection vers l'index des véhicules

    }

    // Affiche les détails d'un véhicule spécifique
    public function show(Vehicule $vehicule) // Utilisation du modèle Vehicule
    {
        if (!$vehicule) {
            abort(404); // Retourne une erreur 404 si le véhicule n'est pas trouvé
        }
        return view('Vehicule.show', compact('vehicule')); // Utilisation de la vue vehicule.show
    }

    // Affiche le formulaire pour modifier un véhicule
    public function edit(Vehicule $vehicule) // Utilisation du modèle Vehicule
    {
        $vehicules = Vehicule::all();
        $services = Service::all();
        $typeVehicules  = TypeVehicule::all();
       
        return view('vehicule.edit', compact('vehicule', 'services','typeVehicules'));
    }

    // Met à jour un véhicule spécifique
    public function update(Request $request, Vehicule $vehicule) // Utilisation du modèle Vehicule
    {
        $vehicule->update($request->all());
        return redirect()->route('vehicules.index'); // Redirection vers l'index des véhicules
    }

    // Supprime un véhicule spécifique
    public function destroy(Vehicule $vehicule) // Utilisation du modèle Vehicule
    {
        $vehicule->delete();
        return redirect()->route('vehicules.index'); // Redirection vers l'index des véhicules
    }


    public function createType()
    {
        $typesVehicules = TypeVehicule::all();
        return $typesVehicules;
    }
}

