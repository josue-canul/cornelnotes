<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
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
        $user = User::inRandomOrder()->first();
        return [

            'importancia'=>fake()->word(),
            'recordar'=>fake()->word(),

            'tema_id' => $tema->id,
            'user_id' => $user->id,
            //
        ];
    }
}
