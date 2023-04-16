<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Tema;

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
        $tema = Tema::inRandomOrder()->first();
        $user = User::inRandomOrder()->first();
        return [


            'titulo'=>fake()->word(),
            'resumen'=>fake()->word(),
            'p_clave'=>fake()->word(),
            'apunte'=>fake()->text(),
            'tema_id' => $tema->id,
            'user_id' => $user->id,
            

            //
        ];
    }
}
