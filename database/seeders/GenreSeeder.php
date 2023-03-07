<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = config('db.genre');

        foreach ($genres as $genre) {
            $newGenre = new Genre();

            $newGenre->name = $genre;

            $newGenre->save();
        }
    }
}
