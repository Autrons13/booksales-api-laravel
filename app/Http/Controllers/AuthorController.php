<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function authors()
    {
        $authors = \App\Models\Author::all();
        return response()->json($authors);
    }
}
