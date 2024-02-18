<?php

namespace Database\Seeders;

use App\Models\MovieCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $MovieCategory = [];

        foreach (range(1, 5) as $index) {
            $MovieCategory[] = [
                'category' => "Category $index",
            ];
        }

        DB::table('movie_categories')->insert($MovieCategory);
    }
}
