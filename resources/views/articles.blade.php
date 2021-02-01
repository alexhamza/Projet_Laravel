@extends('layout')

@section('contenu')

<form method="post">
    @csrf
    <input type="text" name="name" id="name" class="form-control">
    <input type="text" name="name" id="name" class="form-control">
    <br>
    <input type="submit" name="submit" class="btn btn-primary" value="ajouter">
</form>
@endsection