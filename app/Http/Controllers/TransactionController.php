<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with(['user','book'])->get();

        return response()->json([
            'message' => 'List transaksi',
            'data' => $transactions
        ]);
    }


     public function show($id)
    {
        $transaction = Transaction::with(['user','book'])->find($id);

        if (!$transaction) {
            return response()->json([
                'message' => 'Transaksi tidak ditemukan'
            ], 404);
        }
          if ($transaction->user_id !== auth('api')->id()) {
             return response()->json([
            'message' => 'Tidak punya akses'
            ], 403);
        }

        return response()->json($transaction);
    }

     public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|integer|min:1'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $uniqueCode = "ORD-" . strtoupper(uniqid());

        $transaction = Transaction::create([
            'user_id' => auth()->id(), // ambil dari login
            'book_id' => $request->book_id,
            'quantity' => $request->quantity
        ]);

        return response()->json([
            'message' => 'Transaksi berhasil dibuat',
            'data' => $transaction
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $transaction = Transaction::find($id);

    if (!$transaction) {
        return response()->json([
            'message' => 'Data tidak ditemukan'
        ], 404);
    }

    if ($transaction->user_id !== auth('api')->id()) {
        return response()->json([
            'message' => 'Tidak punya akses'
        ], 403);
    }

    $transaction->update($request->all());

         return response()->json([
        'message' => 'Berhasil update',
        'data' => $transaction
         ]);
    } 

    public function destroy($id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json([
                'message' => 'Transaksi tidak ditemukan'
            ], 404);
        }

        $transaction->delete();

        return response()->json([
            'message' => 'Transaksi berhasil dihapus'
        ]);
    }
}
