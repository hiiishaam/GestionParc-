@extends('layouts.base')

@section('title', 'Services')

@section('content')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">


<div class="container">
<h1 style="color: black;">Create Vidange</h1>

    <form action="{{ route('vidanges.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="dateVidange">Date Vidange</label>
            <input type="date" class="form-control" id="dateVidange" name="dateVidange" value="{{ old('dateVidange') }}" required>
        </div>
        <div class="form-group">
            <label for="prixVidange">Price Vidange</label>
            <input type="number" class="form-control" id="prixVidange" name="prixVidange" value="{{ old('prixVidange') }}" required>
        </div>
        <div class="form-group">
            <label for="qte_huile">Quantity of Oil</label>
            <input type="number" class="form-control" id="qte_huile" name="qte_huile" value="{{ old('qte_huile') }}" required>
        </div>
        <div class="form-group">
            <label for="ref_huile">Oil Reference</label>
            <input type="text" class="form-control" id="ref_huile" name="ref_huile" value="{{ old('ref_huile') }}" required>
        </div>
        <div class="form-group">
            <label for="kilometrage">Kilometrage</label>
            <input type="number" class="form-control" id="kilometrage" name="kilometrage" value="{{ old('kilometrage') }}" required>
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
            <label for="idChauffeur">Driver ID</label>
            <input type="number" class="form-control" id="idChauffeur" name="idChauffeur" value="{{ old('idChauffeur') }}" required>
        </div>
        <div class="form-group">
            <label for="idStation">Station ID</label>
            <input type="number" class="form-control" id="idStation" name="idStation" value="{{ old('idStation') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection