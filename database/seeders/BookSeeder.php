<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
        [
            "title" => "Harry Potter",
            "description" => "Fantasy magic",
            "price" => 100000,
            "stock" => 10,
            "cover_photo" => "hp.jpg",
            "author_id" => 1
        ],
        [
            "title" => "The Hobbit",
            "description" => "Fantasy World",
            "price" => 90000,
            "stock" => 10,
            "cover_photo" => "The Hobbit.jpg",
            "author_id" => 2
        ],
        [
            "title" => "Dune",
            "description" => "science fiction on planet desert",
            "price" => 100000,
            "stock" => 5,
            "cover_photo" => "Dune.jpg",
            "author_id" => 3
        ],
        [
            "title" => "Do Androids Dream of Electric Sheep?",
            "description" => "Dystopian",
            "price" => 95000,
            "stock" => 3,
            "cover_photo" => "Do Androids Dream of Electric Sheep?.jpg",
            "author_id" => 4
        ],
        [
            "title" => "The Castle",
            "description" => "Comedy",
            "price" => 95000,
            "stock" => 6,
            "cover_photo" => "The Castle.jpg",
            "author_id" => 5
        ],
    ]);
    }
}
