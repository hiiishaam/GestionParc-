@extends('dashboard')

@section('content')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

<div class="container p-3">
    <div class="row pt-4">
        <div class="col-6">
            <h1 style="color: black;">Liste des Archives</h1>
        </div>
        <div class="col-6 text-end">
            <a href="{{ route('archives.create') }}" class="btn btn-primary">
                <i class="bi bi-plus"></i> &nbsp; Ajouter une nouvelle Archive
            </a>
        </div>
    </div>

    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                   
                    <th scope="col">Date Archive</th>
                    <th scope="col"> Véhicule</th>
                    <th scope="col"> Chauffeur</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($archives as $archive)
                <tr class="table-active">
                  
                    <td>{{ $archive->dateArchive }}</td>
                    <td>{{ $archive->vehicule->nom }}</td>
                    <td>{{ $archive->chauffeur->nomChauffeur }}</td>
                    <td>
                        <a href="{{ route('archives.edit', ['archive' => $archive]) }}" class="btn btn-primary">Éditer</a>
                        <form action="{{ route('archives.destroy', ['archive' => $archive]) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette archive ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
