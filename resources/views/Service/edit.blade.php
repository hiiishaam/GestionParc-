@extends('layouts.base')

@section('title', 'Services')

@section('content')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">


<div class="row pt-4">
    <div class="col-6">
    <h1 style="color: black;">Edit Service</h1>
    </div>

    <form action="{{ route('services.update', $service->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nomService">Nom du service:</label>
            <input type="text" class="form-control" name="nomService" id="nomService" placeholder="Nom du service" value="{{ $service->nomService }}">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
    </form> <button  onclick="window.location.href='{{ route('services.index') }}'">Back to Index</button>
</div>
@endsection