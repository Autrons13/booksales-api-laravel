<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaction::create([
            'user_id' => 1,
            'book_id' => 1,
            'quantity' => 2
        ]);

        Transaction::create([
            'user_id' => 2,
            'book_id' => 1,
            'quantity' => 1
        ]);

        Transaction::create([
            'user_id' => 1,
            'book_id' => 2,
            'quantity' => 3
        ]);
    }
}
