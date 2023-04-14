<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $Nomb= fake()->name();
        $first= explode(' ',$Nomb);
        $prin = fake()->randomElement(['1807', '1907', '2007', '2107', '2207']);
        $fina = fake()->unique()->randomNumber(4, true);
        $control = $prin.$fina;
        return [
            'name' => $Nomb,
            'email' => $first[0].'.'.$control."@itsmotul.edu.mx",
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'ControlNumber' => $control,
            'Ing' => fake()->randomElement(['ISC', 'II', 'IE', 'IEM', 'IER']),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
