<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
             [
                "name" => "Fantasy",
                "description" => "Cerita dunia imajinasi"
            ],
            [
                "name" => "Fantasy",
                "description" => "Cerita dunia imajinasi"
            ],
            [
                "name" => "Science Ficiton",
                "description" => "Cerita keluarga bangsawan mengambil alih pengelolaan planet gurun Arrakis"
            ],
            [
          
                "name" => "Science Ficiton",
                "description" => "Fiksi ilmiah dan teknologi"
            ],
            [
              
                "name" => "Comedy",
                "description" => "tema-tema keterasingan, birokrasi, dan pencarian makna dalam dunia"
            ]
        ]);
    }
}
