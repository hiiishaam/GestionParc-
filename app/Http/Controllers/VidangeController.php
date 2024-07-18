<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vidange;

class VidangeController extends Controller
{
    public function index()
    {
        $vidanges = Vidange::all();
        return view('vidanges.index', compact('vidanges'));
    }

    public function create()
    {
        return view('vidanges.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'dateVidange' => 'required|date',
            'prixVidange' => 'required|numeric',
            'qte_huile' => 'required|integer',
            'ref_huile' => 'required|string',
            'kilometrage' => 'required|integer',
            'idVehicule' => 'required|exists:vehicules,id',
            'idChauffeur' => 'required|exists:chauffeurs,id',
            'idStation' => 'required|exists:stations,id',
        ]);

        Vidange::create($request->all());

        return redirect()->route('vidanges.index')
                         ->with('success', 'Vidange created successfully.');
    }

    public function show(Vidange $vidange)
    {
        return view('vidanges.show', compact('vidange'));
    }

    public function edit(Vidange $vidange)
    {
        return view('vidanges.edit', compact('vidange'));
    }

    public function update(Request $request, Vidange $vidange)
    {
        $request->validate([
            'dateVidange' => 'required|date',
            'prixVidange' => 'required|numeric',
            'qte_huile' => 'required|integer',
            'ref_huile' => 'required|string',
            'kilometrage' => 'required|integer',
            'idVehicule' => 'required|exists:vehicules,id',
            'idChauffeur' => 'required|exists:chauffeurs,id',
            'idStation' => 'required|exists:stations,id',
        ]);

        $vidange->update($request->all());

        return redirect()->route('vidanges.index')
                         ->with('success', 'Vidange updated successfully.');
    }

    public function destroy(Vidange $vidange)
    {
        $vidange->delete();

        return redirect()->route('vidanges.index')
                         ->with('success', 'Vidange deleted successfully.');
    }
}
