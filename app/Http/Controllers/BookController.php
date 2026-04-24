<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
     public function books()
     {
        $books = \App\Models\Book::with('author')->get();
        return response()->json($books);
     }
}
