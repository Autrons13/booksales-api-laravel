<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::with('author')->get();
        return response()->json($books);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:100',
            'description' => 'required|string',
            'price'  => 'required|numeric',
            'stock' => 'required|integer',
            'cover_photo' => 'required|image|mimes:jpeg,jpg,png|max:2048', // sementara string dulu biar gampang
            'author_id' => 'required|exists:authors,id'
        ]);

        if ($validator->fails()) {  
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        $image = $request->file('cover_photo');
         $image -> store('Book','public');

        $books = Book::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'cover_photo' => $image->hashName(),
            'author_id' => $request->author_id,
        ]);

        return response()->json([
            'message' => 'Membuat Book',
            'data' => $books
        ], 201);
    }
}
