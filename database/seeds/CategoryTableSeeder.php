<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'Cats', 'slug' => 'cats', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Dogs', 'slug' => 'dogs', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Pet Foods', 'slug' => 'Pet foods', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Spa', 'slug' => 'spa', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Clothes', 'slug' => 'clothes', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Birds', 'slug' => 'birds', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Accessories', 'slug' => 'accessories', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
