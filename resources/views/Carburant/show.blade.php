@extends('layouts.base')

@section('title', 'Services')

@section('content')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <div>
        @if ($carburant)
            <h1>Détails du carburant</h1>
            <p><strong>Date du carburant:</strong> {{ $carburant->dateCarburant }}</p>
            <p><strong>Type de carburant:</strong> {{ $carburant->typeCarburant }}</p>
            <p><strong>Quantité:</strong> {{ $carburant->qte }}</p>
            <p><strong>Prix:</strong> {{ $carburant->prixCarburant }}</p>
            <p><strong>Kilométrage:</strong> {{ $carburant->kilometrage }}</p>
            <p><strong>Véhicule:</strong> {{ $carburant->vehicule->nom }}</p>
            <p><strong>Chauffeur:</strong> {{ $carburant->chauffeur->nom }}</p>
            <p><strong>Station:</strong> {{ $carburant->station->nom }}</p>
            <!-- Ajoutez d'autres détails du carburant selon vos besoins -->
        @else
            <h1>Carburant non trouvé</h1>
            <p>Le carburant que vous recherchez n'a pas été trouvé.</p>
        @endif
        <button  onclick="window.location.href='{{ route('carburants.index') }}'">Back to Index</button>
    </div>
    @endsection
