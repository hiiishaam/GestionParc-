@extends('layouts.base')

@section('title', 'Services')

@section('content')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <div class="container">
        <div class="row pt-4">
            <div class="col-6">
            <h1 style="color: black;">Modifier un Carburant</h1>
            </div>
        </div>
        <form action="{{ route('carburants.update', $carburant->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="dateCarburant">Date du carburant:</label>
                <input type="date" class="form-control" name="dateCarburant" id="dateCarburant" value="{{ $carburant->dateCarburant }}">
            </div>
            <div class="form-group">
                <label for="typeCarburant">Type de carburant:</label>
                <input type="text" class="form-control" name="typeCarburant" id="typeCarburant" value="{{ $carburant->typeCarburant }}">
            </div>
            <div class="form-group">
                <label for="qte">Quantité de carburant:</label>
                <input type="number" class="form-control" name="qte" id="qte" value="{{ $carburant->qte }}">
            </div>
            <div class="form-group">
                <label for="prixCarburant">Prix du carburant:</label>
                <input type="text" class="form-control" name="prixCarburant" id="prixCarburant" value="{{ $carburant->prixCarburant }}">
            </div>
            <div class="form-group">
                <label for="kilometrage">Kilométrage:</label>
                <input type="number" class="form-control" name="kilometrage" id="kilometrage" value="{{ $carburant->kilometrage }}">
            </div>
            <div class="form-group">
                <label for="idVehicule">Véhicule:</label>
                <select class="form-control" name="idVehicule" id="idVehicule">
                    @foreach ($vehicules as $vehicule)
                        <option value="{{ $vehicule->id }}" @if($vehicule->id === $carburant->idVehicule) selected @endif>{{ $vehicule->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="form-label" for="idStation">Station :</label>
                <select class="form-control" name="idStation" id="idStation">
                    @foreach ($stations as $station)
                        <option value="{{ $station->id }}">{{ $station->nomStation }}</option>
                    @endforeach
                </select>
            </div>
    
            <div class="form-group">
                <label class="form-label" for="idChauffeur">Chauffeurs :</label>
                <select class="form-control" name="idChauffeur" id="idChauffeur">
                    @foreach ($chauffeurs as $chauffeur)
                        <option value="{{ $chauffeur->id }}">{{ $chauffeur->nomChauffeur }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        </form> <button  onclick="window.location.href='{{ route('carburants.index') }}'">Back to Index</button>
    </div>
    @endsection