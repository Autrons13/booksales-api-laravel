<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    public function index()
    {
        return response()->json(Author::all());
    }

    public function show($id) 
    {
        $author = Author::find($id);

        if(!$author) {
            return response()->json([
                'message' => 'data Author tidak ada'
            ], 404);
        }
         return response()->json($author);
    }
   
    
    public function store(Request $request)
    {                                                                             
        $validator = validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'photo'  => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'name' => 'required|string|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'succes' => false,
                'message' => $validator->errors()
            ], 422);
        }


         $image = $request->file('photo');
         $image -> store('authors','public');

        $authors = Author::create([
             'name' => $request->name,
            'photo' => $image->hashName(),
            'bio' => $request->bio
        ]);
        
        return response()->json([
            'message' => 'Membuat Author',
            'data' => $authors
        ], 201);
    }  
    
    public function update(Request $request, $id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'message' => 'Author tidak ditemukan'
            ], 404);
        }

        $author->update($request->all());

        return response()->json([
            'message' => 'Author berhasil diupdate',
            'data' => $author
        ]);
    }

    public function destroy($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'message' => 'Author tidak ditemukan'
            ], 404);
        }

        $author->delete();

        return response()->json([
            'message' => 'Author berhasil dihapus'
        ]);
    }

}
