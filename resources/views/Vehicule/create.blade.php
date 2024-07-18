@extends('layouts.base')

@section('title', 'Services')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <h1 style="color: black;">Ajouter un Vehicule</h1>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
    <h1 style="color: red;">Ajouter un Véhicule</h1>
    <form action="{{ route('vehicules.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="matricule" style="color: red;">Matricule:</label>
            <input type="text" class="form-control" name="matricule" id="matricule" placeholder="Matricule">
        </div>
        <div class="form-group">
            <label for="nom" style="color: red;">Nom:</label>
            <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
        </div>
        <div class="form-group">
            <label for="model" style="color: red;">Modèle:</label>
            <input type="text" class="form-control" name="model" id="model" placeholder="Modèle">
        </div>
        <div class="form-group">
            <label for="fabriquePar" style="color: red;">Fabriqué par:</label>
            <input type="text" class="form-control" name="fabriquePar" id="fabriquePar" placeholder="Fabriqué par">
        </div>
        <div class="form-group">
            <label for="dateExp" style="color: red;">Date d'expiration:</label>
            <input type="date" class="form-control" name="dateExp" id="dateExp">
        </div>
        <div class="form-group">
            <label for="etat" style="color: red;">État:</label>
            <input type="text" class="form-control" name="etat" id="etat" placeholder="État">
        </div>
        <div class="form-group">
            <label for="kilometrage" style="color: red;">Kilométrage:</label>
            <input type="number" class="form-control" name="kilometrage" id="kilometrage" placeholder="Kilométrage">
        </div>
        <div class="form-group">
            <label for="idTypeVehicule" style="color: red;">Type de Véhicule:</label>
            <select class="form-control" name="idTypeVehicule" id="idTypeVehicule">
                @foreach($typeVehicules as $typeVehicule)
                    <option value="{{ $typeVehicule->id }}">{{ $typeVehicule->typeVehicule }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="idService" style="color: red;">Service:</label>
            <select class="form-control" name="idService" id="idService">
                @foreach($services as $service)
                    <option value="{{ $service->id }}">{{ $service->nomService }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        
    </form>
    <button  onclick="window.location.href='{{ route('vehicules.index') }}'">Back to Index</button>
</body>
</html>
@endsection