@extends('layouts.base')

@section('title', 'Services')

@section('content')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<div class="container">
    <h1>Vidange Details</h1>
    <div>
        <strong>Date Vidange:</strong> {{ $vidange->dateVidange }}
    </div>
    <div>
        <strong>Price Vidange:</strong> {{ $vidange->prixVidange }}
    </div>
    <div>
        <strong>Quantity of Oil:</strong> {{ $vidange->qte_huile }}
    </div>
    <div>
        <strong>Oil Reference:</strong> {{ $vidange->ref_huile }}
    </div>
    <div>
        <strong>Kilometrage:</strong> {{ $vidange->kilometrage }}
    </div>
    <div>
        <strong>Vehicle ID:</strong> {{ $vidange->idVehicule }}
    </div>
    <div>
        <strong>Driver ID:</strong> {{ $vidange->idChauffeur }}
    </div>
    <div>
        <strong>Station ID:</strong> {{ $vidange->idStation }}
    </div>
    <a href="{{ route('vidanges.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection
