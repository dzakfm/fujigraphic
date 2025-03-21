<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Mesin Fotokopi']);
        Category::create(['name' => 'Mesin Laminating']);
        Category::create(['name' => 'Mesin Scanner']);
    }
}
