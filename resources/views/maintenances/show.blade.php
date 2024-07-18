@extends('dashboard')

@section('content')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<div class="container">
    <h1>Maintenance Details</h1>
    <p><strong>ID:</strong> {{ $maintenance->id }}</p>
    <p><strong>Date Visit:</strong> {{ $maintenance->date_visite }}</p>
    <p><strong>Price Visit:</strong> {{ $maintenance->prix_visite }}</p>
    <p><strong>Location Visit:</strong> {{ $maintenance->lieux_visite }}</p>
    <p><strong>Comment:</strong> {{ $maintenance->commentaire }}</p>
    <p><strong>Vehicle ID:</strong> {{ $maintenance->idVehicule }}</p>
    <p><strong>Driver ID:</strong> {{ $maintenance->idChauffeur }}</p>
    <a href="{{ route('maintenances.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection
