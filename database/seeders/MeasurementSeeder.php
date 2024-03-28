<?php

namespace Database\Seeders;

use App\Models\Measurement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MeasurementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Measurement::create([
            'name'=>'kg',
        ]);
        Measurement::create([
            'name'=>'dana',
        ]);
        Measurement::create([
            'name'=>'litr',
        ]);
        Measurement::create([
            'name'=>'metr',
        ]);
    }
}
