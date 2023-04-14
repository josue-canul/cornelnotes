<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Asignatura;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tema>
 */
class TemaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $asignatura = Asignatura::inRandomOrder()->first();
        return [

            'name' =>fake()->word(),
            'asignatura_id' => $asignatura->id,
            //
        ];
    }
}
