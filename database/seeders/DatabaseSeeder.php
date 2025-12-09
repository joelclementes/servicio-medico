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
        $this->call(CloneDepartamentosSeeder::class);
        $this->call(PadecimientosSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PacientesSeeder::class);
    }
}
