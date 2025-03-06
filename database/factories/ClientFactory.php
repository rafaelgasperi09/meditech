<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'ruc' => fake()->randomNumber(7),
            'dv' => fake()->numberBetween(10,99),
            'long_name' =>fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'whatsapp' => fake()->phoneNumber,
            'logo'=>fake()->imageUrl(),
        ];
    }
}
