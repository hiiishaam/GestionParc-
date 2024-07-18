@extends('layouts.base')

@section('title', 'Services')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Véhicule</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row pt-4">
            <div class="col-md-6 mx-auto">
                @if ($vehicule)
                    <h1>Détails du Véhicule</h1>
                    <p><strong>Matricule:</strong> {{ $vehicule->matricule }}</p>
                    <p><strong>Nom:</strong> {{ $vehicule->nom }}</p>
                    <p><strong>Modèle:</strong> {{ $vehicule->model }}</p>
                    <p><strong>Fabriqué par:</strong> {{ $vehicule->fabriquePar }}</p>
                    <p><strong>Date d'expiration:</strong> {{ $vehicule->dateExp }}</p>
                    <p><strong>État:</strong> {{ $vehicule->etat }}</p>
                    <p><strong>Kilométrage:</strong> {{ $vehicule->kilometrage }}</p>
                    <p><strong>ID Type de Véhicule:</strong> {{ $vehicule->idTypeVehicule }}</p>
                    <p><strong>ID Service:</strong> {{ $vehicule->idService }}</p>
                    <!-- Ajoutez d'autres détails du véhicule selon vos besoins -->
                @else
                    <h1>Véhicule non trouvé</h1>
                    <p>Le véhicule que vous recherchez n'a pas été trouvé.</p>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
@endsection