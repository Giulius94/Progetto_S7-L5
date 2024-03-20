<?php

namespace Database\Factories;

use App\Models\attivita;
use App\Models\orari;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\prenotazioni>
 */
class PrenotazioniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $stato = ['accettata', 'respinta', 'in attesa'];

        return [
            //
            'stato' => fake()->randomElement($stato),
            'attivita_id' => attivita::get()->random()->id,
            'orari_id' => orari::get()->random()->id,
        ];
    }
}

