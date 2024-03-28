<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            CategorySeeder::class,
            MeasurementSeeder::class,
            CurrencySeeder::class,
            SupplierSeeder::class,
            ClientSeeder::class,
            UserSeeder::class,
            ProductSeeder::class,
            WarehouseSeeder::class,
            InputSeeder::class,
        ]);

    }
}
