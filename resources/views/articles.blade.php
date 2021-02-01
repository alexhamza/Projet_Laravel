@extends('layout')
<title>Ajout d'article</title>
@section('contenu')
<br><br>
<form method="post">
    @csrf
    <h1 style="text-align: center">Ajouter un article</h1>
    <br><br><br>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nom de l'article</label>
        <input type="text" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Catégorie de l'article</label>
        <input type="text" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Texte de l'article</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <br>
    <div class="mb-3">
        <input type="submit" name="submit" class="btn btn-primary" value="Ajouter l'article">
    </div>
</form>
@endsection