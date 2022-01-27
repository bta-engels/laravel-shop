<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            BlogSeeder::class,
            FeatureSeeder::class,
            PageSeeder::class,
            TodoSeeder::class,
            CategorySeeder::class,
            ManufacturerSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
