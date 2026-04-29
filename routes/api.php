<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Validator;

Route::post('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class,'login']);

Route::apiResource('authors', AuthorController::class);



Route::get('/books', [BookController::class, 'index']);
Route::post('/books', [BookController::class, 'store']);



Route::apiResource('genres', GenreController::class);


Route::middleware(['auth:api'])->group(function () {

    Route::post('/logout', [AuthController::class,'logout']);


    Route::middleware('customer')->group(function () {
        Route::post('/transactions', [TransactionController::class,'store']);
        Route::get('/transactions/{id}', [TransactionController::class,'show']);
        Route::put('/transactions/{id}', [TransactionController::class,'update']);
    });

 
    Route::middleware('admin')->group(function () {
        Route::get('/transactions', [TransactionController::class,'index']);
        Route::delete('/transactions/{id}', [TransactionController::class,'destroy']);
    });

});