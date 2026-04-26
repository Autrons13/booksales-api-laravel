<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        return response()->json(Genre::all());
    }

    public function store(Request $request)
    {
        $genre = Genre::create([
            'name' => $request->name,
            'description' => $request->description
        ]);
        
        return response()->json([
            'message' => 'Membuat Genre',
            'data' => $genres
        ], 201);
    }
}
