<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use App\Models\Books;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{

    public function index($id)
    {
        //
    }

    public function create(Request $request)
    {
        $bookId = $request->query('id');
        $book = Books::findOrFail($bookId);
        return view('reviews.create', compact('book'));
    }


    public function store(Request $request)
    {
        $book_id = $request->input('book_id');
        $request->validate([
            'reviewer_name' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'review_text' => 'required',
        ]);

        Reviews::create([
            'book_id' => $book_id,
            'reviewer_name' => $request->reviewer_name,
            'rating' => $request->rating,
            'review_text' => $request->review_text,
        ]);

        return redirect()->route('books.index', $book_id)->with('success', 'Review added successfully.');
    }

    public function show($id)
    {
        
        $book = Books::findOrFail($id);
        
        $reviews = Reviews::where('book_id', $book->id)->get();
           
        return view('reviews.index', compact('book', 'reviews'));
    }
    
    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
