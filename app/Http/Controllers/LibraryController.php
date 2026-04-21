<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Author;


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
}
