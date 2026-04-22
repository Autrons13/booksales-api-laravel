<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Author;
use App\Models\Book;


class LibraryController extends Controller
{
   public function genres()
    {
        $genres = Genre::all();
        return view('genres', compact('genres'));
    }

    public function authors()
    {
        $authors = Author::all();
        return view('authors', compact('authors'));
    }

     public function books()
     {
        $books = Book::with('author')->get();
        return view('books', compact('books'));
     }
}
