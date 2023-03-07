<?php

namespace Database\Seeders;

use App\Models\Cast;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $casts = config('db.cast');

        foreach ($casts as $cast) {
            $newCast = new Cast();

            $newCast->name = $cast;

            $newCast->save();
        }
    }
}
