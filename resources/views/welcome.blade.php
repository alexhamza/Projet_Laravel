@extends('layout')
<title>Home page</title>
@section('contenu')
<br><br>
<h1 style="text-align: center">Articles à la Une</h1>
@php
$articles = DB::select('SELECT * FROM articles');

@endphp
@foreach ($articles as $article)

<br><br><br>
<div class="container">
    <div class="card row d-flex justify-content-around">
        <div class="card-body">
            <h5 class="card-title">{{ $article->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$article->categorie}}</h6>
            <p class="card-text">{{ $article->texte }}</p>
            <h5 class="card-title">posté le : {{ $article->created_at }}</h5>
            <a href="#" class="btn btn-primary">Lire l'article</a>
        </div>
    </div>
</div>
@endforeach

@endsection