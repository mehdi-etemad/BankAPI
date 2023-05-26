<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_account' => fake()->randomNumber(1,17),
            'token' => fake()->unique()->regexify('[A-Z0-9]{20}'),
            'number' => fake()->unique()->creditCardNumber(),
            'expiraion' => fake()->creditCardExpirationDate(),
            'status' => 1
        ];
    }
}
