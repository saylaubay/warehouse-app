<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Currency::create([
            'name'=>'Dollar',
        ]);
        Currency::create([
            'name'=>'Rubl',
        ]);
        Currency::create([
            'name'=>'Tenge',
        ]);
        Currency::create([
            'name'=>'Swm',
        ]);
    }
}
