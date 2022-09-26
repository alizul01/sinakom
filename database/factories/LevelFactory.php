<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Level>
 */
class LevelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'level_name' => $this->faker->randomElement(['Beginner', 'Intermediate', 'Advanced']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
