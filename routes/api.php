<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Validator;

Route::apiResource('authors', AuthorController::class);



Route::get('/books', [BookController::class, 'index']);
Route::post('/books', [BookController::class, 'store']);



Route::apiResource('genres', GenreController::class);

