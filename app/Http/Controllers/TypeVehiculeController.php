<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeVehicule;

class TypeVehiculeController extends Controller
{
    
   // Affiche la liste des types de véhicules
   public function index()
   {
       $typesVehicules = TypeVehicule::all(); // Utilisation du modèle TypeVehicule
       return view('TypeVehicule.index', compact('typesVehicules')); // Utilisation de la vue TypeVehicule.index
   }

   // Affiche le formulaire pour créer un nouveau type de véhicule
   public function create()
   {
       return view('TypeVehicule.create'); // Utilisation de la vue TypeVehicule.create
   }

   // Enregistre un nouveau type de véhicule
   public function store(Request $request)
   {
       TypeVehicule::create($request->all()); // Utilisation du modèle TypeVehicule
       return redirect()->route('typesVehicules.index'); // Redirection vers l'index des types de véhicules
   }

   // Affiche les détails d'un type de véhicule spécifique
   public function show(TypeVehicule $typeVehicule) // Utilisation du modèle TypeVehicule
   {
       if (!$typeVehicule) {
           abort(404); // Retourne une erreur 404 si le type de véhicule n'est pas trouvé
       }
       return view('TypeVehicule.show', compact('typeVehicule')); // Utilisation de la vue TypeVehicule.show
   }

   // Affiche le formulaire pour modifier un type de véhicule
   public function edit(TypeVehicule $typeVehicule) // Utilisation du modèle TypeVehicule
   {
       return view('TypeVehicule.edit', compact('typeVehicule')); // Utilisation de la vue TypeVehicule.edit
   }

   // Met à jour un type de véhicule spécifique
   public function update(Request $request, TypeVehicule $typeVehicule) // Utilisation du modèle TypeVehicule
   {
       $typeVehicule->update($request->all());
       return redirect()->route('typesVehicules.index'); // Redirection vers l'index des types de véhicules
   }

   // Supprime un type de véhicule spécifique
   public function destroy(TypeVehicule $typeVehicule) // Utilisation du modèle TypeVehicule
   {
       $typeVehicule->delete();
       return redirect()->route('typesVehicules.index'); // Redirection vers l'index des types de véhicules
   }
    
}
