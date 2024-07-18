@extends('dashboard')

@section('content')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<div class="container">
    <h1 style="color: red;">Create Maintenance</h1>

    <form action="{{ route('maintenances.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="date_visite" style="color: red;">Date Visit</label>
            <input type="date" class="form-control" id="date_visite" name="date_visite" value="{{ old('date_visite') }}" required>
        </div>
        <div class="form-group">
            <label for="prix_visite" style="color: red;">Price Visit</label>
            <input type="number" class="form-control" id="prix_visite" name="prix_visite" value="{{ old('prix_visite') }}" required>
        </div>
        <div class="form-group">
            <label for="lieux_visite" style="color: red;">Location Visit</label>
            <input type="text" class="form-control" id="lieux_visite" name="lieux_visite" value="{{ old('lieux_visite') }}" required>
        </div>
        <div class="form-group">
            <label for="commentaire" style="color: red;">Comment</label>
            <textarea class="form-control" id="commentaire" name="commentaire">{{ old('commentaire') }}</textarea>
        </div>
        <div class="form-group">
            <label class="form-label" for="idVehicule" style="color: red;">Véhicule:</label>
            <select class="form-control" name="idVehicule" id="idVehicule">
                @foreach ($vehicules as $vehicule)
                    <option value="{{ $vehicule->id }}">{{ $vehicule->nom }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label class="form-label" for="idChauffeur" style="color: red;">Chauffeurs :</label>
            <select class="form-control" name="idChauffeur" id="idChauffeur">
                @foreach ($chauffeurs as $chauffeur)
                    <option value="{{ $chauffeur->id }}">{{ $chauffeur->nomChauffeur }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
