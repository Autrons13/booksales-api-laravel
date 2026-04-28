<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Validator;

Route::apiResource('authors', AuthorController::class);
Route::apiResource('authors', AuthorController::class)->only(['index','show']);


Route::get('/books', [BookController::class, 'index']);
Route::post('/books', [BookController::class, 'store']);



Route::apiResource('genres', GenreController::class);
Route::apiResource('genres', GenreController::class)->only(['index','show']);

Route::middleware('admin')->group(function () {
    Route::apiResource('authors', AuthorController::class)->except(['index','show']);
    Route::apiResource('genres', GenreController::class)->except(['index','show']);
});