<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Author;
use App\Models\Book;


class LibraryController extends Controller
{
   public function genres()
    {
        $genres = \App\Models\Genre::all();
        return response()->json($genres);
    }

    public function authors()
    {
        $authors = \App\Models\Author::all();
        return response()->json($authors);
    }

     public function books()
     {
        $books = \App\Models\Book::with('author')->get();
        return response()->json($books);
     }
}
