<?php

namespace Database\Seeders;

use App\Models\Input;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Psy\Util\Str;

class InputSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Input::create([
            'warehouse_id'=>rand(1,3),
            'supplier_id'=>rand(1,3),
            'currency_id'=>rand(1,4),
            'facture_number'=>\Illuminate\Support\Str::uuid(),
            'code'=>\Illuminate\Support\Str::uuid(),
        ]);
        Input::create([
            'warehouse_id'=>rand(1,3),
            'supplier_id'=>rand(1,3),
            'currency_id'=>rand(1,4),
            'facture_number'=>\Illuminate\Support\Str::uuid(),
            'code'=>\Illuminate\Support\Str::uuid(),
        ]);
        Input::create([
            'warehouse_id'=>rand(1,3),
            'supplier_id'=>rand(1,3),
            'currency_id'=>rand(1,4),
            'facture_number'=>\Illuminate\Support\Str::uuid(),
            'code'=>\Illuminate\Support\Str::uuid(),
        ]);

    }
}
