@extends('dashboard')

@section('content')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

<div class="container p-3">
<h1 style="color: black;">Modifier une Archive</h1>
    <form action="{{ route('archives.update', $archive->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="dateArchive">Date Archive:</label>
            <input type="date" class="form-control" name="dateArchive" id="dateArchive" value="{{ old('dateArchive', $archive->dateArchive) }}">
            @error('dateArchive')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="idVehicule">Véhicule:</label>
            <select class="form-control" name="idVehicule" id="idVehicule">
                @foreach ($vehicules as $vehicule)
                    <option value="{{ $vehicule->id }}" {{ old('idVehicule', $archive->idVehicule) == $vehicule->id ? 'selected' : '' }}>{{ $vehicule->nom }}</option>
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
                    <option value="{{ $chauffeur->id }}" {{ old('idChauffeur', $archive->idChauffeur) == $chauffeur->id ? 'selected' : '' }}>{{ $chauffeur->nom }}</option>
                @endforeach
            </select>
            @error('idChauffeur')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
    <button onclick="window.location.href='{{ route('archives.index') }}'" class="btn btn-secondary mt-2">Retour à la liste</button>
</div>
@endsection
