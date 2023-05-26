<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AccountFactory extends Factory
{
    public function definition(): array
    {
        return [
            'id_customer' => fake()->randomNumber(1,10),
            'number' => fake()->unique()->randomNumber(7, true),
            'balance' => fake()->randomNumber(7),
            'status' => 1
        ];
    }
}
