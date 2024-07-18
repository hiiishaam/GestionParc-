@extends('layouts.base')

@section('title', 'Services')

@section('content')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

<div class="container p-3">
<h1 style="color: black;">Ajouter un Archive</h1>
    <form action="{{ route('archives.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="dateArchive">Date Archive:</label>
            <input type="date" class="form-control" name="dateArchive" id="dateArchive" value="{{ old('dateArchive') }}">
            @error('dateArchive')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="idVehicule">Véhicule:</label>
            <select class="form-control" name="idVehicule" id="idVehicule">
                @foreach ($vehicules as $vehicule)
                    <option value="{{ $vehicule->id }}" {{ old('idVehicule') == $vehicule->id ? 'selected' : '' }}>{{ $vehicule->nom }}</option>
                @endforeach
            </select>
            @error('idVehicule')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="idChauffeur">Chauffeur:</label>
            <select class="form-control" name="idChauffeur" id="idChauffeur">
                @foreach ($chauffeurs as $chauffeur)
                    <option value="{{ $chauffeur->id }}">{{ $chauffeur->nomChauffeur }}</option>
                @endforeach
            </select>
            @error('idChauffeur')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
    <button onclick="window.location.href='{{ route('archives.index') }}'" class="btn btn-secondary mt-2">Retour à la liste</button>
</div>
@endsection
