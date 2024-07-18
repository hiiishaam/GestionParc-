@extends('layouts.base')

@section('title', 'Services')

@section('content')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <div class="container p-3">
        <div class="row pt-4">
            <div class="col-6">
            <h1 style="color: black;">Liste des Types de vehicules</h1>
            </div>
            <div class="col-6 text-end">
                <a href="{{ route('typesVehicules.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus"></i> &nbsp; Ajouter un Nouveau Type de Véhicule
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Type de Véhicule</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($typesVehicules as $typeVehicule)
                    <tr class="table-active">
                        <th scope="row">{{ $typeVehicule->id }}</th>
                        <td>{{ $typeVehicule->typeVehicule }}</td>
                        <td>
                            <a href="{{ route('typesVehicules.edit', ['typeVehicule' => $typeVehicule]) }}" class="btn btn-primary">Modifier</a>
                            <form action="{{ route('typesVehicules.destroy', ['typeVehicule' => $typeVehicule]) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce type de véhicule ?')">Supprimer</button>
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