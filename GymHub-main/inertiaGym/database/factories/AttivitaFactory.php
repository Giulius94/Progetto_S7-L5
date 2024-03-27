<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\attivita>
 */
class AttivitaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nome_attivita = ['pesi', 'cardio', 'calisthenics', 'grid', 'yoga', 'crossfit'];
        $descrizione = [
            'PESI Allenamento in sala pesi senza esercizi core, incentrato alla crescita muscolare tramite esericizi con manubri e macchinari',
            'CARDIO Allenamento incentrato sulla corsa o attività core per aumentare la resistenza del fiato ed il corpo a battiti elevati',
            'CALISThENICS Disciplina basata sull allenamento a corpo libero usando il proprio peso come attrezzo ginnico',
            'GRID è un misto fra core, resistenza e pesi. 8 esercizi alternati per 45 secondi ciascuno con 15 secondi di riposo',
            'YOGA Allungamento, rilassamento e forza stabilizzante sono alla base dello Yoga insieme alla respirazione',
            'CROSSFIT come grid è un misto fra core, resistenza e pesi ma a differenza di quest ultimo i pesi sono usati in più esercizi e diversi tempi di recupero'
        ];

        $start_date = fake()->date();
        $end_date = fake()->dateTimeBetween($start_date, '+1 month');

        return [
            //

            'name' => fake()->randomElement($nome_attivita),
            'description' => fake()->randomElement($descrizione),
            'start_date' => $start_date,
            'end_date' => $end_date,
        ];
    }
}



