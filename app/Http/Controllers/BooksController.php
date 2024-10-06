<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{

    public function index()
    {
        $books = Books::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'genre' => 'required',
            'publication_date' => 'required|date',
        ]);

        Books::create($request->all());
        return redirect()->route('books.index')->with('success', 'Book created successfully.');
    }

    public function show(Books $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Books $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $bookId)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'genre' => 'required',
            'publication_date' => 'required|date',
        ]);
    

        $book = Books::findOrFail($bookId);
    
        $book->update($request->all());
    
        return redirect()->route('books.index');
    }
    

    public function destroy(Books $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
    }
}
