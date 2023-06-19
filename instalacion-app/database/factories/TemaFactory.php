<?php

namespace Database\Factories;

use App\Models\Asignatura;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'tema' => fake()->word(),
            'id_asignatura' => $asignatura->id,
        ];
    }
}
