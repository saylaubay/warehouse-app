<?php

namespace Database\Seeders;

use App\Models\Warehouse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Warehouse::create([
            'name'=>'Nukus',
        ]);
        Warehouse::create([
            'name'=>'Shimbay',
        ]);
        Warehouse::create([
            'name'=>'Xojeli',
        ]);
    }
}
