@extends('layouts.base')

@section('title', 'Services')

@section('content')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<h1 style="color: black;">Vidange</h1>
    <a href="{{ route('vidanges.create') }}" class="btn btn-primary">Add Vidange</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date Vidange</th>
                <th>Price Vidange</th>
                <th>Quantity of Oil</th>
                <th>Oil Reference</th>
                <th>Kilometrage</th>
                <th>Vehicle ID</th>
                <th>Driver ID</th>
                <th>Station ID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vidanges as $vidange)
            <tr>
                <td>{{ $vidange->id }}</td>
                <td>{{ $vidange->dateVidange }}</td>
                <td>{{ $vidange->prixVidange }}</td>
                <td>{{ $vidange->qte_huile }}</td>
                <td>{{ $vidange->ref_huile }}</td>
                <td>{{ $vidange->kilometrage }}</td>
                <td>{{ $vidange->idVehicule }}</td>
                <td>{{ $vidange->idChauffeur }}</td>
                <td>{{ $vidange->idStation }}</td>
                <td>
                    <a href="{{ route('vidanges.show', $vidange->id) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('vidanges.edit', $vidange->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('vidanges.destroy', $vidange->id) }}" method="POST" style="display:inline;">
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
