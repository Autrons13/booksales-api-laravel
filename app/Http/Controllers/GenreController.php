<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function genres()
    {
        $genres = \App\Models\Genre::all();
        return response()->json($genres);
    }
}
