@extends('dashboard')@extends('layouts.base')

@section('title', 'Services')
@section('content')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <div class="container">
        <div class="row pt-4">
            <div class="col-md-6 mx-auto">
                @if ($typeVehicule)
                    <h1>Détails du Type de Véhicule</h1>
                    <p><strong>Type de Véhicule:</strong> {{ $typeVehicule->typeVehicule }}</p>
                    <!-- Ajoutez d'autres détails du type de véhicule selon vos besoins -->
                @else
                    <h1>Type de Véhicule non trouvé</h1>
                    <p>Le type de véhicule que vous recherchez n'a pas été trouvé.</p>
                @endif
            </div>
        </div>
        <button  onclick="window.location.href='{{ route('typesVehicules.index') }}'">Back to Index</button>
    </div>
    @endsection
