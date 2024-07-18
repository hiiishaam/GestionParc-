<!-- resources/views/utilisateurs/create.blade.php -->
@extends('layouts.base')

@section('title', 'Services')

@section('content')
<style>
    .form-label {
        color: red;
    }
    .back-button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
</style>
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<div class="container mt-5">
    <h1  style="color: red;">Ajouter un Nouveau Utilisateur</h1>
    <form action="{{ route('utilisateurs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nomComplete" class="form-label">Nom Complet</label>
            <input type="text" class="form-control" id="nomComplete" name="nomComplete" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="login" class="form-label">Login</label>
            <input type="text" class="form-control" id="login" name="login" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de Passe</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" class="form-control" id="photo" name="photo">
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
        <button  onclick="window.location.href='{{ route('utilisateurs.index') }}'">Back to Index</button>
       

    </form>
</div>
@endsection
