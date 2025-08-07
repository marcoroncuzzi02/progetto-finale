<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        $tags = [
        'Cult',
        'Blockbuster',
        'Premiato',
        'Indipendente', 
        'Storico',
        'Cartone'];

        foreach ($tags as $tag) {
        Tag::create(['name' => $tag]);
        };
    }
}