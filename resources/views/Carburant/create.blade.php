@extends('layouts.base')

@section('title', 'Services')

@section('content')


<style>
    .form-label {
        color: red;
    }
    .back-button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: rgba(17, 8, 8, 0.137);
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
</style>
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<div class="container p-3">
<h1 style="color: black;">Ajouter un Carburant</h1>
    <form action="{{ route('carburants.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label class="form-label" for="dateCarburant">Date du carburant:</label>
            <input type="date" class="form-control" name="dateCarburant" id="dateCarburant">
        </div>
        <div class="form-group">
            <label class="form-label" for="typeCarburant">Type de carburant:</label>
            <input type="text" class="form-control" name="typeCarburant" id="typeCarburant">
        </div>
        <div class="form-group">
            <label class="form-label" for="qte">Quantité de carburant:</label>
            <input type="number" class="form-control" name="qte" id="qte">
        </div>
        <div class="form-group">
            <label class="form-label" for="prixCarburant">Prix du carburant:</label>
            <input type="text" class="form-control" name="prixCarburant" id="prixCarburant">
        </div>
        <div class="form-group">
            <label class="form-label" for="kilometrage">Kilométrage:</label>
            <input type="number" class="form-control" name="kilometrage" id="kilometrage">
        </div>
        <div class="form-group">
            <label class="form-label" for="idVehicule">Véhicule:</label>
            <select class="form-control" name="idVehicule" id="idVehicule">
                @foreach ($vehicules as $vehicule)
                    <option value="{{ $vehicule->id }}">{{ $vehicule->nom }}</option>
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
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
    <button onclick="window.location.href='{{ route('carburants.index') }}'" class="back-button">Back to Index</button>
</div>
 @endsection
