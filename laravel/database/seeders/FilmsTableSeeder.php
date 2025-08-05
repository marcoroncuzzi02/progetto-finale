<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Film;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $films = [
            ['title' => 'Matrix', 'description' => 'Fantascienza e azione', 'genre_id' => 5],
            ['title' => 'Inception', 'description' => 'Sogni e azione', 'genre_id' => 1],
            ['title' => 'Titanic', 'description' => 'Storia drammatica', 'genre_id' => 3],
        ];

        foreach ($films as $film) {
            Film::create($film);
        }
    }
}
