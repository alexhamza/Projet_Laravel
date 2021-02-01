@extends('layout')
<title>post-inscription</title>
@section('contenu')
<br><br><br>
    <div style="text-align: center">
        <h1>Bienvenue</h1>
        <br>
        <h3>Votre inscription a bien été prise en compte</h3>
        <br>
        <p>Pour vous connectez, c'est juste ici</p>
        <a href="{{ url('/connexion') }}" class="link-dark">Connection</a>
    </div>
@endsection