
@extends('layouts.base')

@section('title', 'Services')
@section('content')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<div class="container p-3">
    <div class="row pt-4">
        <div class="col-6">
        <h1 style="color: black;">Liste des Chauffeurs</h1>
        </div>
        <br><br>
        <div class="col-6 text-end">
            <a href="{{ route('chauffeurs.create') }}" class="btn btn-primary">
                <i class="bi bi-plus"></i> &nbsp; Ajouter un nouveau chauffeur
            </a>
        </div>
    </div> 

    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nom complet</th>
                    <th scope="col">CNI</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Date de Naissance</th>
                    <th scope="col">Téléphone</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($chauffeurs as $chauffeur)
                <tr class="table-active">
                    <th scope="row">{{ $chauffeur->id }}</th>
                    <td>{{ $chauffeur->nomChauffeur }} {{ $chauffeur->prenomChauffeur }}</td>
                    <td>{{ $chauffeur->cnie }}</td>
                    <td>{{ $chauffeur->adresse }}</td>
                    <td>{{ $chauffeur->dateNaissance }}</td>
                    <td>{{ $chauffeur->tel }}</td>
                    <td>
                        <a href="{{ route('chauffeurs.edit', ['chauffeur' => $chauffeur]) }}" class="btn btn-primary">Modifier</a>
                        <form action="{{ route('chauffeurs.destroy', ['chauffeur' => $chauffeur]) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce chauffeur ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection