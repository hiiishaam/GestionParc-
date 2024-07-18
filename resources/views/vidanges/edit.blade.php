@extends('layouts.base')

@section('title', 'Services')

@section('content')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<div class="container">
<h1 style="color: black;">Edit Vidange</h1>

    <form action="{{ route('vidanges.update', $vidange->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="dateVidange">Date Vidange</label>
            <input type="date" class="form-control" id="dateVidange" name="dateVidange" value="{{ $vidange->dateVidange }}" required>
        </div>
        <div class="form-group">
            <label for="prixVidange">Price Vidange</label>
            <input type="number" class="form-control" id="prixVidange" name="prixVidange" value="{{ $vidange->prixVidange }}" required>
        </div>
        <div class="form-group">
            <label for="qte_huile">Quantity of Oil</label>
            <input type="number" class="form-control" id="qte_huile" name="qte_huile" value="{{ $vidange->qte_huile }}" required>
        </div>
        <div class="form-group">
            <label for="ref_huile">Oil Reference</label>
            <input type="text" class="form-control" id="ref_huile" name="ref_huile" value="{{ $vidange->ref_huile }}" required>
        </div>
        <div class="form-group">
            <label for="kilometrage">Kilometrage</label>
            <input type="number" class="form-control" id="kilometrage" name="kilometrage" value="{{ $vidange->kilometrage }}" required>
        </div>
        <div class="form-group">
            <label for="idVehicule">Vehicle ID</label>
            <input type="number" class="form-control" id="idVehicule" name="idVehicule" value="{{ $vidange->idVehicule }}" required>
        </div>
        <div class="form-group">
            <label for="idChauffeur">Driver ID</label>
            <input type="number" class="form-control" id="idChauffeur" name="idChauffeur" value="{{ $vidange->idChauffeur }}" required>
        </div>
        <div class="form-group">
            <label for="idStation">Station ID</label>
            <input type="number" class="form-control" id="idStation" name="idStation" value="{{ $vidange->idStation }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
