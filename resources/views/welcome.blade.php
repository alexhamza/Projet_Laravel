@extends('layout')
<title>Home page</title>
@section('contenu')
@php
$users = DB::select('SELECT * FROM users');

@endphp
@foreach ($users as $user)
    <input type="text" value="{{ $user->name }}">
    <input type="text" value="{{ $user->email }}">
@endforeach

@endsection