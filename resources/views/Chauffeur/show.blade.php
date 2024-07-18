@extends('layouts.base')

@section('title', 'Services')

@section('content')

<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<div class="container p-3">
    @if ($chauffeur)
        <h1>Détails du chauffeur</h1>
        <p><strong>Nom:</strong> {{ $chauffeur->nomChauffeur }}</p>
        <p><strong>Prénom:</strong> {{ $chauffeur->prenomChauffeur }}</p>
        <p><strong>CNI:</strong> {{ $chauffeur->cnie }}</p>
        <p><strong>Adresse:</strong> {{ $chauffeur->adresse }}</p>
        <p><strong>Date de Naissance:</strong> {{ $chauffeur->dateNaissance }}</p>
        <p><strong>Date d'Entrée:</strong> {{ $chauffeur->dateEntrer }}</p>
        <p><strong>Téléphone:</strong> {{ $chauffeur->tel }}</p>
        <p><strong>Numéro de Permis:</strong> {{ $chauffeur->numPermis }}</p>
        <p><strong>Date d'Expiration du Permis:</strong> {{ $chauffeur->dateExpPermis }}</p>
        <p><strong>Expérience totale:</strong> {{ $chauffeur->totalExperience }}</p>
        <!-- Ajoutez d'autres détails du chauffeur selon vos besoins -->
    @else
        <h1>Chauffeur non trouvé</h1>
        <p>Le chauffeur que vous recherchez n'a pas été trouvé.</p>
    @endif
    <button  onclick="window.location.href='{{ route('carburants.index') }}'">Back to Index</button>
</div> 
@endsection