@extends('layouts.base')

@section('title', 'Services')

@section('content')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

<div>
    <div>
        <div>
            <h1 style="color: black;">Liste des utilisateurs</h1>
        </div>
        <div class="col-6 text-end">
            <a href="{{ route('utilisateurs.create') }}" class="btn btn-primary">
                <i class="bi bi-plus"></i> &nbsp; Ajouter un Nouveau utilisateur
            </a>
        </div>
    </div>

    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nom complet</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($utilisateurs as $utilisateur)
                    <tr class="table-active">
                        <th scope="row">{{ $utilisateur->id }}</th>
                        <td>{{ $utilisateur->nomComplete }}</td>
                        <td>{{ $utilisateur->email }}</td>
                        <td>
                            <a href="{{ route('utilisateurs.edit', ['utilisateur' => $utilisateur]) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('utilisateurs.destroy', ['utilisateur' => $utilisateur]) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
