<?php

use App\Http\Controllers\LibraryController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [LibraryController::class, 'genres']);
Route::get('/genres', [LibraryController::class, 'genres']);
Route::get('/authors', [LibraryController::class, 'authors']);
