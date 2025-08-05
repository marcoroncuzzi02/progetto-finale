<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = ['Azione', 'Commedia', 'Drammatico', 'Horror', 'Fantascienza'];

        foreach ($genres as $genre) {
            Genre::create(['name' => $genre]);
        }
    }
}
