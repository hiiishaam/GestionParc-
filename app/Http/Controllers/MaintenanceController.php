<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintenance;
use App\Models\Vehicule;
use App\Models\Carburant;
use App\Models\Chauffeur;
class MaintenanceController extends Controller
{

    public function index()
    {
        $maintenances = Maintenance::all();
        return view('maintenances.index', compact('maintenances'));
    }

    public function create()
    {
        $countvehicules = Vehicule::count(); 
        $countchauffeurs = Chauffeur::count();
        $countcarburants = Carburant::count();
        $countmaintenance = Maintenance::count(); 
        $vehicules = Vehicule::all(); 
        $chauffeurs = Chauffeur::all();
        $maintenances = Maintenance::all();
        return view('maintenances.create', compact('vehicules', 'chauffeurs', 'maintenances', 'countvehicules', 'countchauffeurs', 'countcarburants', 'countmaintenance'));
    }

    public function store(Request $request)
{
    $request->validate([
        'date_visite' => 'required|date',
        'prix_visite' => 'required|numeric',
        'lieux_visite' => 'required|string',
        'commentaire' => 'nullable|string',
        'idVehicule' => 'required|exists:vehicules,id',
        'idChauffeur' => 'required|exists:chauffeurs,id',
    ]);

    Maintenance::create($request->all());

    return redirect()->route('maintenances.index')
                     ->with('success', 'Maintenance created successfully.');
}

    public function show(Maintenance $maintenance)
    {
        $countvehicules = Vehicule::count(); 
        $countchauffeurs = Chauffeur::count();
        $countcarburants = Carburant::count();
        $countmaintenance = Maintenance::count(); 
        return view('maintenances.show', compact('maintenance', 'countvehicules', 'countchauffeurs', 'countcarburants', 'countmaintenance'));
    }

    public function edit(Maintenance $maintenance)
    {
        $vehicules = Vehicule::all(); 
        $chauffeurs = Chauffeur::all();
        return view('maintenances.edit', compact('vehicules', 'chauffeurs', 'maintenance'));
    }

    public function update(Request $request, Maintenance $maintenance)
{
    $request->validate([
        'date_visite' => 'required|date',
        'prix_visite' => 'required|numeric',
        'lieux_visite' => 'required|string',
        'commentaire' => 'nullable|string',
        'idVehicule' => 'required|exists:vehicules,id',
        'idChauffeur' => 'required|exists:chauffeurs,id',
    ]);

    $maintenance->update($request->all());

    return redirect()->route('maintenances.index')
                     ->with('success', 'Maintenance updated successfully.');
}

    public function destroy(Maintenance $maintenance)
    {
        $maintenance->delete();

        return redirect()->route('maintenances.index')
                         ->with('success', 'Maintenance deleted successfully.');
    }
}
