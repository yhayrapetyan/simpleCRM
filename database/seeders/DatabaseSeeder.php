<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AbilitySeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\StatusSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AbilitySeeder::class,
            RoleSeeder::class,
            StatusSeeder::class,
            DummyDataSeeder::class,
        ]);
    }
}
