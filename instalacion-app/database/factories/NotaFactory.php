<?php

namespace Database\Factories;

use App\Models\Tema;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nota>
 */
class NotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = User::inRandomOrder()->first();
        $tema = Tema::inRandomOrder()->first();
        return [
            'titulo' => fake()->word(),
            'contenido' => fake()->paragraph(),
            'p_clave' => implode(',', fake()->words()),
            'resumen' => fake()->paragraph(),

            'id_usuario' => $user->id,
            'id_tema' => $tema->id,
        ];
    }
}
