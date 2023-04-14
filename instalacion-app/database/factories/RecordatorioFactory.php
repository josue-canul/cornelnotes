<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Asignatura;
use App\Models\Tema;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recordatorio>
 */
class RecordatorioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $tema = Tema::inRandomOrder()->first();
        $asignatura = Asignatura::inRandomOrder()->first();
        return [

            'importancia'=>fake()->word(),
            'recordar'=>fake()->word(),

            'tema_id' => $tema->id,
            'asignatura_id' => $asignatura->id,
            //
        ];
    }
}
