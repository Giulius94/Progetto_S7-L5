<?php

namespace Database\Factories;

use App\Models\attivita;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\orari>
 */
class OrariFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $orario_inizio = ['9:00', '10:00', '11:00', '12:00', '13:00', '15:00', '16:00', '17:00'];
        $orario_fine = ['10:00', '11:00', '12:00', '13:00', '15:00', '16:00', '17:00', '18:00'];

        return [
            //
            'orario_inizio' => fake()->randomElement($orario_inizio),
            'orario_fine' => fake()->randomElement($orario_fine),
            'attivita_id' => attivita::get()->random()->id,
            

        ];
    }
}


