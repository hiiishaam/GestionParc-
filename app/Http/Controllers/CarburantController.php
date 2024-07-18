<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carburant;
use App\Models\Vehicule; 
use App\Models\Chauffeur; 
use App\Models\Station; 

class CarburantController extends Controller
{
    public function index()
{
    $carburants = Carburant::all();
    return view('Carburant.index', compact('carburants'));
}

public function create()
{
    $vehicules = Vehicule::all(); 
    $chauffeurs = Chauffeur::all();
    $stations = Station::all(); 
    $carburants = Carburant::all();
    return view('Carburant.create', compact('vehicules', 'chauffeurs', 'stations', 'carburants'));
}


    public function store(Request $request)
    {
        Carburant::create($request->all());
        return redirect()->route('carburants.index'); 
    }
public function show(Carburant $carburant)
{
    if (!$carburant) {
        abort(404); 
    }
    return view('Carburant.show', compact('carburant'));
}

public function edit(Carburant $carburant)
{
    $vehicules = Vehicule::all(); 
    $chauffeurs = Chauffeur::all(); 
    $stations = Station::all(); 
    return view('Carburant.edit', compact('carburant','vehicules', 'chauffeurs', 'stations'));
}

public function update(Request $request, Carburant $carburant)
{
    $carburant->update($request->all());
    return redirect()->route('carburants.index');
}

public function destroy(Carburant $carburant)
{
    $carburant->delete();
    return redirect()->route('carburants.index');
}

}
