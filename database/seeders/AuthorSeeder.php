<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('authors')->insert([
        ["name" => "J.K. Rowling", "photo" => "rowling.jpg", "bio" => "Penulis Harry Potter"],
        ["name" => "J.R.R Tolkien", "photo" => "J.R.R Tolkien.jpg", "bio" => "salah satu penulis novel fantasy yang terkenal"],
        ["name" => "Frank Herbert", "photo" => "Frank Herbert.jpg", "bio" => "salah satu penulis novel fantasy yang dikenal sebagai father of high fantasy"],
        ["name" => "Philip K Dick", "photo" => "Philip K Dick.jpg", "bio" => "Penulis fiksi ilmiah amerika yang berpengaruh"],
        ["name" => "Franz Kafka", "photo" => "Franz Kafka.jpg", "bio" => "mengeksplorasi aliensi,birokrasi, dan kecemasan eksistensial"],
    ]);
    }
}
