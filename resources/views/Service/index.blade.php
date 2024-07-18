<!-- resources/views/services/index.blade.php -->

@extends('layouts.base')

@section('title', 'Services')

@section('content')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

<div class="container p-3">
    <div class="row pt-4">
        <div class="col-6">
        <h1 style="color: black;">Liste des services</h1>
        </div>
        <div class="col-6 text-end">
            <a href="{{ route('services.create') }}" class="btn btn-primary">
                <i class="bi bi-plus"></i> &nbsp; Ajouter un nouveau service
            </a>
        </div>
    </div>

    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nom du service</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                <tr class="table-active">
                    <th scope="row">{{ $service->id }}</th>
                    <td>{{ $service->nomService }}</td>
                    <td>
                        <a href="{{ route('services.edit', ['service' => $service]) }}" class="btn btn-primary">Éditer</a>
                        <form action="{{ route('services.destroy', ['service' => $service]) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce service ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
