@extends('layout')

@section('contenu')
    <div style="text-align: center">
        <h1>Bienvenue</h1>
        <br>
        <h3>Vous êtes bien connecté à votre compte</h3>
        <br>
        <p>Revenez au menu principale juste ici</p>
        <a href="{{ url('/') }}" class="link-dark">Home Page</a>
    </div>
@endsection