<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
   // Affiche la liste des services
   public function index()
   {
       $services = Service::all(); // Utilisation du modèle Service
       return view('Service.index', compact('services')); // Utilisation de la vue Service.index
   }

   // Affiche le formulaire pour créer un nouveau service
   public function create()
   {
       return view('Service.create'); // Utilisation de la vue Service.create
   }

   // Enregistre un nouveau service
   public function store(Request $request)
   {
       Service::create($request->all()); // Utilisation du modèle Service
       return redirect()->route('services.index'); // Redirection vers l'index des services
   }

   // Affiche les détails d'un service spécifique
   public function show(Service $service) // Utilisation du modèle Service
   {
       if (!$service) {
           abort(404); // Retourne une erreur 404 si le service n'est pas trouvé
       }
       return view('Service.show', compact('service')); // Utilisation de la vue Service.show
   }

   // Affiche le formulaire pour modifier un service
   public function edit(Service $service) // Utilisation du modèle Service
   {
       return view('Service.edit', compact('service')); // Utilisation de la vue Service.edit
   }

   // Met à jour un service spécifique
   public function update(Request $request, Service $service) // Utilisation du modèle Service
   {
       $service->update($request->all());
       return redirect()->route('services.index'); // Redirection vers l'index des services
   }

   // Supprime un service spécifique
   public function destroy(Service $service) // Utilisation du modèle Service
   {
       $service->delete();
       return redirect()->route('services.index'); // Redirection vers l'index des services
   }
}
