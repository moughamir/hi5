<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Action', 'Drama', 'Comedy', 'Horror', 'Sci-Fi'];
        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name'=> trim(strtolower($category)),
            ]);
        }
    }
}
