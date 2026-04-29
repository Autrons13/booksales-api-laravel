<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'required|in:admin,customer'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role
        ]);

        return response()->json([
        'message' => 'Register berhasil',
         'data' => $user
        ], 201);
    }

    // LOGIN
   public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }


        if (!$token = auth('api')->attempt($request->only('email','password'))) {
            return response()->json([
                'message' => 'Email / Password salah'
            ], 401);
        }

        return response()->json([
            'message' => 'login berhasil',
            'token' => $token,
            'user' => auth('api')->user()
        ]);
    }


    // LOGOUT
     public function logout()
    {
        auth()->logout();

        return response()->json([
            'message' => 'Logout berhasil'
        ]);
    }
}
