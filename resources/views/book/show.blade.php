@extends('layout.app')

@section('content')
    <h2>Affichage du livre {{ $book->name }}</h2>
    <ul>
        <li>{{ $book->id }}</li>
        <li>{{ $book->name }}</li>
        <li>{{ $book->created_at }}</li>
        <li>{{ $book->updated_at }}</li>
    </ul>
@endsection