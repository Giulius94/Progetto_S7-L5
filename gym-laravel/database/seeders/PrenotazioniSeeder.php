<?php

namespace Database\Seeders;

use App\Models\prenotazioni;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrenotazioniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        prenotazioni::factory(6)->create();
    }
}
