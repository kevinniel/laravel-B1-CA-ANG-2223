@extends('layout.app')

@section('content')
    <h2>Affichage du genre {{ $genre->name }}</h2>
    <ul>
        <li>{{ $genre->id }}</li>
        <li>{{ $genre->name }}</li>
        <li>{{ $genre->created_at }}</li>
        <li>{{ $genre->updated_at }}</li>
    </ul>
    <h3>Liste des livres : </h3>
    <ul>
        @foreach($genre->books as $book)
            <li>{{ $book->name }}</li>
        @endforeach
    </ul>
@endsection