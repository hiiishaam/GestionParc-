@extends('layouts.base')

@section('title', 'Services')

@section('content')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <div class="container">
        <div class="row pt-4">
            <div class="col-6">
            <h1 style="color: black;">Modifier un Type de Vehicule</h1>
            </div>
        </div>
        <form action="{{ route('typesVehicules.update', $typeVehicule->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="typeVehicule">Type de Véhicule:</label>
                <input type="text" class="form-control" name="typeVehicule" id="typeVehicule" placeholder="Type de Véhicule" value="{{ $typeVehicule->typeVehicule }}">
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
        <button  onclick="window.location.href='{{ route('typesVehicules.index') }}'">Back to Index</button>
    </div>
    @endsection