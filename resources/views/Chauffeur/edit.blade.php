@extends('layouts.base')

@section('title', 'Services')

@section('content')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

<div class="container p-3">
  <div class="row pt-4">
      <div class="col-6">
      <h1 style="color: black;">Modifier un Chauffeur</h1>
      </div>
  </div>

  <form action="{{ route('chauffeurs.update', $chauffeur->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="form-group">
          <label for="cnie">CNI:</label>
          <input type="text" class="form-control" name="cnie" id="cnie" placeholder="CNI" value="{{ $chauffeur->cnie }}">
      </div>
      <!-- Add the rest of your form inputs here -->
      <div class="form-group">
          <label for="photo">Photo:</label>
          <input type="file" class="form-control-file" name="photo" id="photo">
      </div>
      <button type="submit" class="btn btn-primary">Enregistrer</button>
  </form> <button  onclick="window.location.href='{{ route('carburants.index') }}'">Back to Index</button>
</div>
@endsection