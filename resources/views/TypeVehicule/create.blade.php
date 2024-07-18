@extends('layouts.base')

@section('title', 'Services')

@section('content')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<h1 style="color: black;">Ajouter un type de vehicule</h1>
    <form action="{{ route('typesVehicules.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="typeVehicule">Type de Véhicule:</label>
            <input type="text" class="form-control" name="typeVehicule" id="typeVehicule" placeholder="Type de Véhicule">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form> <button  onclick="window.location.href='{{ route('typesVehicules.index') }}'">Back to Index</button>
@endsection