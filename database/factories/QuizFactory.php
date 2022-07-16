<?php

namespace Database\Factories;

use App\Models\Modul;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quiz>
 */
class QuizFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        return [
            'modul_id' => rand(1, Modul::count()),
            'quiz_path' => $this->faker->unique()->slug,
            'desc' => $this->faker->sentences(5, true),
            'status' => $this->faker->randomElement(['dibuka', 'draft', 'ditutup']),
            'finished_at' => $this->faker->dateTimeBetween('-4 hours', '-2 hours'),
            'started_at' => $this->faker->dateTimeBetween('-6 hours', '-4 hours'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
