<?php

namespace App\Models;

class Genre
{
    public static function all()
    {
        return [
            [
                "id" => 1,
                "name" => "Fantasy",
                "description" => "Cerita dunia imajinasi"
            ],
            [
                "id" => 2,
                "name" => "Fantasy",
                "description" => "Cerita dunia imajinasi"
            ],
            [
                "id" => 3,
                "name" => "Science Ficiton",
                "description" => "Cerita keluarga bangsawan mengambil alih pengelolaan planet gurun Arrakis"
            ],
            [
                "id" => 4,
                "name" => "Science Ficiton",
                "description" => "Fiksi ilmiah dan teknologi"
            ],
            [
                "id" => 5,
                "name" => "Comedy",
                "description" => "tema-tema keterasingan, birokrasi, dan pencarian makna dalam dunia"
            ],
        ];
    }
}