@extends('layouts.base')

@section('title', 'Services')

@section('content')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">


<div class="container p-3">
    <div class="row pt-4">
        <div class="col-6">
        <h1 style="color: black;">Liste des Stations</h1>
        </div>
        <div class="col-6 text-end">
            <a href="{{ route('stations.create') }}" class="btn btn-primary">
                <i class="bi bi-plus"></i> &nbsp; Ajouter une nouvelle station
            </a>
        </div>
    </div>

    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nom de la station</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stations as $station)
                <tr class="table-active">
                    <th scope="row">{{ $station->id }}</th>
                    <td>{{ $station->nomStation }}</td>
                    <td>
                        <a href="{{ route('stations.edit', ['station' => $station]) }}" class="btn btn-primary">Éditer</a>
                        <form action="{{ route('stations.destroy', ['station' => $station]) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette station ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection