<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Station;


class StationController extends Controller
{
    
   // Affiche la liste des services
   public function index()
   {
       $stations = Station::all(); 
       return view('Station.index', compact('stations'));
   }

   // Affiche le formulaire pour créer un nouveau service
   public function create()
   {
       return view('Station.create'); // Utilisation de la vue Service.create
   }

   // Enregistre un nouveau service
   public function store(Request $request)
   {
       Station::create($request->all());
       return redirect()->route('stations.index'); 
   }

   // Affiche les détails d'un service spécifique
   public function show(Station $station) // Utilisation du modèle Station
   {
       if (!$station) {
           abort(404); // Retourne une erreur 404 si la station n'est pas trouvée
       }
       return view('Station.show', compact('station')); // Utilisation de la vue Service.show
   }

   // Affiche le formulaire pour modifier une station
   public function edit(Station $station) // Utilisation du modèle Station
   {
       return view('Station.edit', compact('station')); // Utilisation de la vue Service.edit
   }

   // Met à jour une station spécifique
   public function update(Request $request, Station $station) // Utilisation du modèle Station
   {
       $station->update($request->all());
       return redirect()->route('stations.index'); // Redirection vers l'index des services
   }

   // Supprime une station spécifique
   public function destroy(Station $station) // Utilisation du modèle Station
   {
       $station->delete();
       return redirect()->route('stations.index'); // Redirection vers l'index des services
   }
}
