<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name'=>'Samsung A10',
            'category_id'=>2,
            'measurement_id'=>2,
            'code'=>str(rand(1,1000)),
        ]);
        Product::create([
            'name'=>'Iphone Pro Max 15',
            'category_id'=>2,
            'measurement_id'=>2,
            'code'=>str(rand(1,1000)),
        ]);
        Product::create([
            'name'=>'Televizor',
            'category_id'=>1,
            'measurement_id'=>2,
            'code'=>str(rand(1,1000)),
        ]);

    }
}
