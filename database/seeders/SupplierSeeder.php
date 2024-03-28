<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supplier::create([
            'first_name' => 'Supplier 1',
            'last_name' => "",
            'phone' => "11",
        ]);
        Supplier::create([
            'first_name' => 'Supplier 2',
            'last_name' => "",
            'phone' => "22",
        ]);
        Supplier::create([
            'first_name' => 'Supplier 3',
            'last_name' => "",
            'phone' => "33",
        ]);
    }
}
