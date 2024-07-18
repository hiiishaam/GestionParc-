@extends('layouts.base')

@section('title', 'Services')

@section('content')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<div class="container">
<h1 style="color: black;">Maintenance</h1>
    <a href="{{ route('maintenances.create') }}" class="btn btn-primary">Add Maintenance</a>
    <table class="table">
        <thead>
            <tr>
               
               
                <th>Price Visit</th>
                <th>Location Visit</th>
                <th>Comment</th>
                <th>Vehicle </th>
                <th>Driver </th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($maintenances as $maintenance)
            <tr>
                
                
                <td>{{ $maintenance->prix_visite }}</td>
                <td>{{ $maintenance->lieux_visite }}</td>
                <td>{{ $maintenance->commentaire }}</td>
                <td>{{ $maintenance->vehicule->nom }}</td>
                 <td>{{ $maintenance->chauffeur->nomChauffeur }}</td>
                <td>
                    <a href="{{ route('maintenances.show', $maintenance->id) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('maintenances.edit', $maintenance->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('maintenances.destroy', $maintenance->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
