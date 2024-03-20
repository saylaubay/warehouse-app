<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name'=>'Texnika',
            'category_id'=>null,
        ]);
        Category::create([
            'name'=>'Phone',
            'category_id'=>1,
        ]);
        Category::create([
            'name'=>'Printer',
            'category_id'=>1,
        ]);
        Category::create([
            'name'=>'Cobalt',
            'category_id'=>null,
        ]);
    }
}
