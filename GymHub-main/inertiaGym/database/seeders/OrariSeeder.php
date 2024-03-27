<?php

namespace Database\Seeders;

use App\Models\orari;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        orari::factory(6)->create();
    }
}
