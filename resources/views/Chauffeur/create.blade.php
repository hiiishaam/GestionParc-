@extends('layouts.base')

@section('title', 'Services')

@section('content')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    @csrf
<br><br>
<h1 style="color: black;">Ajouter un Chauffeur</h1>
{{-- <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"> --}}
<form action="{{ route('chauffeurs.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="cnie">CNI:</label>
    <input type="text" class="form-control" name="cnie" id="cnie" placeholder="CNI">
  </div>
  <div class="form-group">
    <label for="nomChauffeur">Nom:</label>
    <input type="text" class="form-control" name="nomChauffeur" id="nomChauffeur" placeholder="Nom">
  </div>
  <div class="form-group">
    <label for="prenomChauffeur">Prénom:</label>
    <input type="text" class="form-control" name="prenomChauffeur" id="prenomChauffeur" placeholder="Prénom">
  </div>
  <div class="form-group">
    <label for="adresse">Adresse:</label>
    <input type="text" class="form-control" name="adresse" id="adresse" placeholder="Adresse">
  </div>
  <div class="form-group">
    <label for="dateNaissance">Date de Naissance:</label>
    <input type="date" class="form-control" name="dateNaissance" id="dateNaissance">
  </div>
  <div class="form-group">
    <label for="dateEntrer">Date d'Entrée:</label>
    <input type="date" class="form-control" name="dateEntrer" id="dateEntrer">
  </div>
  <div class="form-group">
    <label for="tel">Téléphone:</label>
    <input type="tel" class="form-control" name="tel" id="tel" placeholder="Téléphone">
  </div>
  <div class="form-group">
    <label for="numPermis">Numéro de Permis:</label>
    <input type="text" class="form-control" name="numPermis" id="numPermis" placeholder="Numéro de Permis">
  </div>
  <div class="form-group">
    <label for="dateExpPermis">Date d'Expiration du Permis:</label>
    <input type="date" class="form-control" name="dateExpPermis" id="dateExpPermis">
  </div>
  <div class="form-group">
    <label for="totalExperience">Expérience totale:</label>
    <input type="number" class="form-control" name="totalExperience" id="totalExperience" placeholder="Expérience totale">
  </div>
  <div class="form-group">
    <label for="photo">Photo:</label>
    <input type="file" class="form-control-file" name="photo" id="photo">
  </div>

  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form> <button  onclick="window.location.href='{{ route('chauffeurs.index') }}'">Back to Index</button>
@endsection