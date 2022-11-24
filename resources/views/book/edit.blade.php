@extends('layout.app')

@section('content')
    <h2>Formulaire de modification du livre : {{ $book->name }}</h2>
    <form action="{{ route("book.update", $book->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="name">Nom : </label>
        <input type="text" id="name" name="name" value="{{ $book->name }}">
        <button type="submit">Modifier le livre !</button>
    </form>
@endsection