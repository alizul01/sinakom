<?php

namespace Database\Factories;

use App\Models\Quiz;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Result>
 */
class ResultFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        return [
            'quiz_id' => rand(1, Quiz::count()),
            'user_id' => rand(1, User::count()),
            'score' => $this->faker->numberBetween(50, 100),
            'correct' => $this->faker->numberBetween(0, 15),
            'wrong' => $this->faker->numberBetween(0, 15),
            'empty' => $this->faker->numberBetween(0, 15),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
