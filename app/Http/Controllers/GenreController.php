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

    public function show($id)
    {
        $genre = Genre::find($id);
        if (!$genre) {
            return response()->json([
                'message' => 'Data Genre tidak ditemukan'
            ], 404);
        }
        return response()->json($genre);
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

      public function update(Request $request, $id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'message' => 'Genre tidak ditemukan'
            ], 404);
        }

        $genre->update($request->all());

        return response()->json([
            'message' => 'Genre berhasil diupdate',
            'data' => $genre
        ]);
    }

    public function destroy($id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'message' => 'Genre tidak ditemukan'
            ], 404);
        }

        $genre->delete();

        return response()->json([
            'message' => 'Genre berhasil dihapus'
        ]);
    }
}
