<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Archive;
use App\Models\Vehicule;
use App\Models\Chauffeur;
use App\Models\Carburant;
use App\Models\Maintenance;

class ArchiveController extends Controller
{

    public function index()
    {
        $archives = Archive::all();
        $countvehicules = Vehicule::count(); 
        $countchauffeurs = Chauffeur::count();
        $countcarburants = Carburant::count();
        $countmaintenance = Maintenance::count(); 
        return view('archives.index', compact('archives', 'countvehicules', 'countchauffeurs', 'countcarburants', 'countmaintenance'));

    }
    
    public function create()
    {
        $vehicules = Vehicule::all();
        $chauffeurs = Chauffeur::all();
        return view('archives.create', compact('vehicules','chauffeurs'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'dateArchive' => 'required|date',
            'idVehicule' => 'required|exists:vehicules,id',
            'idChauffeur' => 'required|exists:chauffeurs,id',
        ]);

        Archive::create($validatedData);
        return redirect()->route('archives.index')->with('success', 'Archive créée avec succès');
    }

     
    public function show(Archive $archive)
    {
        return view('archives.show', compact('archive'));
    }

    public function edit(Archive $archive)
    {
        $vehicules = Vehicule::all();
        $chauffeurs = Chauffeur::all();
        return view('archives.edit', compact('archive', 'vehicules', 'chauffeurs'));
    }
    public function update(Request $request, Archive $archive)
    {
        $validatedData = $request->validate([
            'dateArchive' => 'required|date',
            'idVehicule' => 'required|exists:vehicules,id',
            'idChauffeur' => 'required|exists:chauffeurs,id',
        ]);

        $archive->update($validatedData);
        return redirect()->route('archives.index')->with('success', 'Archive mise à jour avec succès');
    }

    public function destroy(Archive $archive)
    {
        $archive->delete();
        return redirect()->route('archives.index')->with('success', 'Archive supprimée avec succès');
    }
}
