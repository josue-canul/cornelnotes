<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        $user = User::inRandomOrder()->first();
        return [
            'titulo' => fake()->word(),
            'contenido' => fake()->paragraph(),
            'importancia' => fake()->word(),
            'fecha' => fake()->dateTime(),

            'id_usuario' => $user->id,
        ];
    }
}
