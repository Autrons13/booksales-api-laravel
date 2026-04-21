<?php
namespace App\Models;

class Author
{
    public static function all()
    {
        return [
            [
                "id" => 1,
                "name" => "J.K. Rowling",
                "photo" => "rowling.jpg",
                "bio" => "Penulis Harry Potter"
            ],
            [
                "id" => 2,
                "name" => "J R R Tolkien",
                "photo" => "J R R Tolkien.jpg",
                "bio" => "Salah satu penulis novel fantasy yang terkenal"
            ],
            [
                "id" => 3,
                "name" => "Frank Herbert",
                "photo" => "Frank Herbert.jpg",
                "bio" => "Salah satu penulis novel fantasy yang dikenal sebagai father of high fantasy"
            ],
            [
                "id" => 4,
                "name" => "philip K Dick",
                "photo" => "philip K Dick.jpg",
                "bio" => "penulis fiksi ilmiah Amerika yang berpengaruh"
            ],
            [
                "id" => 5,
                "name" => "Franz Kafka",
                "photo" => "Franz Kafka.jpg",
                "bio" => "mengeksplorasi alienasi, birokrasi, dan kecemasan eksistensial"
            ],
        ];
    }
}