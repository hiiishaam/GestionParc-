@extends('layouts.base')

@section('title', 'Services')

@section('content')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">


    <div class="container p-3">
        <div class="row pt-4">
            <div class="col-6">
            <h1 style="color: black;">Liste des Carburants</h1>
            </div>
            <div class="col-6 text-end">
                <a href="{{ route('carburants.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus"></i> &nbsp; Ajouter un nouveau carburant
                </a>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Date du carburant</th>
                        <th scope="col">Type de carburant</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Kilométrage</th>
                        <th scope="col">Véhicule</th>
                        <th scope="col">Chauffeur</th>
                        <th scope="col">Station</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($carburants as $carburant)
                    <tr class="table-active">
                        <th scope="row">{{ $carburant->id }}</th>
                        <td>{{ $carburant->dateCarburant }}</td>
                        <td>{{ $carburant->typeCarburant }}</td>
                        <td>{{ $carburant->qte }}</td>
                        <td>{{ $carburant->prixCarburant }}</td>
                        <td>{{ $carburant->kilometrage }}</td>
                        <td>{{ $carburant->vehicule->nom }}</td>
                        <td>{{ $carburant->chauffeur->nom }}</td>
                        <td>{{ $carburant->station->nom }}</td>
                        <td>
                            <a href="{{ route('carburants.edit', ['carburant' => $carburant]) }}" class="btn btn-primary">Éditer</a>
                            <form action="{{ route('carburants.destroy', ['carburant' => $carburant]) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce carburant ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection