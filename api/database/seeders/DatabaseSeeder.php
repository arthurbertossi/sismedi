<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
//            UserSeeder::class,
            StateSeeder::class,
            PatientSeeder::class
        ]);
    }
}
