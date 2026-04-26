<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenreController extends Controller
{
    public function index()
    {
         $genres = Genre::all();

        return response()->json([
            'message' => 'List Genre',
            'data' => $genres
        ]);
    }

    public function store(Request $request)
    {

         $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'description'  => 'required|string',
            
        ]);

        if ($validator->fails()) {  
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        $genre = Genre::create([
            'name' => $request->name,
            'description' => $request->description
        ]);
        
        return response()->json([
            'message' => 'Membuat Genre',
            'data' => $genre
        ], 201);
    }
}
