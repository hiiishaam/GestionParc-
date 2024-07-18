@extends('dashboard')

@section('content')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

<div class="container p-3">
    <div class="row pt-4">
        <div class="col-6">
            <h1>Détails de l'Archive</h1>
        </div>
    </div>

    <div class="card-body">
        @if ($archive)
            <p><strong>Date Archive:</strong> {{ $archive->dateArchive }}</p>
            <p><strong>ID Véhicule:</strong> {{ $archive->idVehicule }}</p>
            <p><strong>ID Chauffeur:</strong> {{ $archive->idChauffeur }}</p>
            <!-- Ajoutez d'autres détails de l'archive selon vos besoins -->
        @else
            <h1>Archive non trouvée</h1>
            <p>L'archive que vous recherchez n'a pas été trouvée.</p>
        @endif
        <button onclick="window.location.href='{{ route('archives.index') }}'" class="btn btn-secondary mt-2">Retour à la liste</button>
    </div>
</div>
@endsection
