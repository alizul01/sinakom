<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Computational Thinking', 'Problem Solving', 'Programming']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
