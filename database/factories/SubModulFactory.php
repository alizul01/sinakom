<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubModul>
 */
class SubModulFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        return [
            'submodul_name' => $this->faker->words(3, true),
            'modul_id' => $this->faker->randomElement([1, 2, 3]),
            'material' => $this->faker->sentences(5, true),
            'sorting' => $this->faker->numberBetween(1, 8),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
