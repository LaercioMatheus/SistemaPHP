<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profissionais>
 */
class ProfissionaisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'specialty' => fake()->word(),
            'crm' => fake()->unique()->word(),
            'address' => fake()->address(),
            'opening_hours_start' => fake()->dateTimeBetween('-1 year', '+1 year'),
            'opening_hours_end' => fake()->dateTimeBetween('-1 year', '+1 year'),
            'Weekday' => fake()->randomElement(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']),
        ];
    }
}
