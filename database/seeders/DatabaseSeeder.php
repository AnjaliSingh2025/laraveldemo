<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Students;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Generate 10 students using the factory
        Students::factory()->count(10)->create();
    }
}

