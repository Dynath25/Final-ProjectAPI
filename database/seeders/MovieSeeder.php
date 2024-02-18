<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i <10; $i++) {
            Movie::create([
                'movie_name'=>$faker->sentence,
                'director'=>$faker->name,
                'description'=>$faker->text,
            ]);
        }
    }
}
