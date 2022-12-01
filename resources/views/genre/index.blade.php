@extends('layout.app')

@section('content')
    <h2>Liste des genres</h2>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($genres as $genre)
                <tr>
                    <td>{{ $genre->id }}</td>
                    <td>{{ $genre->name }}</td>
                    <td>
                        <a href="{{ route("genre.show", $genre->id) }}">Voir</a>
                        <a href="{{ route("genre.edit", $genre->id) }}">Modifier</a>
                        <form action="{{ route("genre.destroy") }}" method="POST">
                            @method('delete')
                            @csrf
                            <input type="hidden" name="genre_id" value="{{ $genre->id }}">
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection