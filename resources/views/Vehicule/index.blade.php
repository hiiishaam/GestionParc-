@extends('layouts.base')

@section('title', 'Services')

@section('content')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <h1 style="color: black;">Liste des Vehicules</h1>
</head>
<body>
    <div class="container p-3">
        <div class="row pt-4">
            <div class="col-6">
                <h1>Liste des Véhicules</h1>
            </div>
            <div class="col-6 text-end">
                <a href="{{ route('vehicules.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus"></i> &nbsp; Ajouter un Nouveau Véhicule
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Matricule</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Model</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vehicules as $vehicule)
                    <tr class="table-active">
                        <th scope="row">{{ $vehicule->id }}</th>
                        <td>{{ $vehicule->matricule }}</td>
                        <td>{{ $vehicule->nom }}</td>
                        <td>{{ $vehicule->model }}</td>
                        <td>
                            <a href="{{ route('vehicules.edit', ['vehicule' => $vehicule]) }}" class="btn btn-primary">Modifier</a>
                            <form action="{{ route('vehicules.destroy', ['vehicule' => $vehicule]) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce véhicule ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
@endsection