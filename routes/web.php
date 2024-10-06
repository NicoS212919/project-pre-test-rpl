<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\ReviewsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('books.index');
});

Route::resource('books', BooksController::class);
Route::resource('/reviews', ReviewsController::class);