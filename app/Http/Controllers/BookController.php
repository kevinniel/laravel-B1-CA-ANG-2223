<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\Genre;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('book.index', compact("books"));
    }

    public function create()
    {
        $genres = Genre::all();
        return view('book.create', compact("genres"));
    }

    public function store(Request $request)
    {
        $book = new Book();
        $book->name = $request->get('name');
        $book->genre_id = $request->get('genre_id');
        $book->save();

        return redirect()->route("book.index");
    }

    public function show($id)
    {
        $book = Book::with("genre")->find($id);
        
        return view('book.show', compact("book"));
    }

    public function edit($id)
    {
        $book = Book::find($id);

        return view('book.edit', compact("book"));
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->name = $request->get('name');
        $book->save();

        return redirect()->route("book.index");
    }

    public function destroy(Request $request)
    {
        Book::destroy( $request->get("book_id") );

        return redirect()->route("book.index");
    }
}
