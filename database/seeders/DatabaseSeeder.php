<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ExtraSeeder;
use Database\Seeders\TravelSeeder;
use Database\Seeders\LanguageSeeder;
use Database\Seeders\DestinationSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            TravelSeeder::class,
            DestinationSeeder::class,
            ExtraSeeder::class,
            LanguageSeeder::class,
            TouristsSeeder::class,
        ]);
    }
}
