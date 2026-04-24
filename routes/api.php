<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;

Route::get('/authors', [AuthorController::class, 'authors']);


Route::get('/books', [BookController::class, 'books']);



Route::get('/genres', [GenreController::class, 'genres']);
