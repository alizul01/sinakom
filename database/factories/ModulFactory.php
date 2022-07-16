<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Modul>
 */
class ModulFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        return [
            'category_id' => $this->faker->randomElement([1, 2, 3]),
            'level_id' => $this->faker->randomElement([1, 2, 3]),
            'modul_name' => $this->faker->randomElement(['Computational Thinking', 'Problem Solving', 'Programming']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
