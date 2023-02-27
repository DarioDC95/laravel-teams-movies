<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = config('db.movies');

        foreach ($movies as $value) {
            $newMovie = new Movie();
            $newMovie->title = $value['title'];
            $newMovie->original_title = $value['original_title'];
            $newMovie->nationality = $value['nationality'];
            $newMovie->release_date = $value['release_date'];
            $newMovie->vote = $value['vote'];
            $newMovie->cast = $value['cast'];
            $newMovie->cover_path = $value['cover_path'];

            $newMovie->save();
        }
    }
}
