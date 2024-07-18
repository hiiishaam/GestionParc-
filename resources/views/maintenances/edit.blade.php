@extends('layouts.base')

@section('title', 'Services')

@section('content')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<div class="container">
<h1 style="color: black;">Edit Maintenance</h1>

    <form action="{{ route('maintenances.update', $maintenance->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="date_visite">Date Visit</label>
            <input type="date" class="form-control" id="date_visite" name="date_visite" value="{{ $maintenance->date_visite ?? old('date_visite') }}" required>
        </div>
        <div class="form-group">
            <label for="prix_visite">Price Visit</label>
            <input type="number" class="form-control" id="prix_visite" name="prix_visite" value="{{ $maintenance->prix_visite ?? old('prix_visite') }}" required>
        </div>
        <div class="form-group">
            <label for="lieux_visite">Location Visit</label>
            <input type="text" class="form-control" id="lieux_visite" name="lieux_visite" value="{{ $maintenance->lieux_visite ?? old('lieux_visite') }}" required>
        </div>
        <div class="form-group">
            <label for="commentaire">Comment</label>
            <textarea class="form-control" id="commentaire" name="commentaire">{{ $maintenance->commentaire ?? old('commentaire') }}"></textarea>
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
            <label class="form-label" for="idChauffeur"  style="color: red;">Chauffeurs :</label>
            <select class="form-control" name="idChauffeur" id="idChauffeur" value="{{ $maintenance->idChauffeur ?? old('idChauffeur') }}">
                @foreach ($chauffeurs as $chauffeur)
                    <option value="{{ $chauffeur->id }}">{{ $chauffeur->nomChauffeur }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
