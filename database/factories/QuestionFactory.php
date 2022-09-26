<?php

namespace Database\Factories;

use App\Models\Quiz;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        return [
            'quiz_id' => rand(1, Quiz::count()),
            'question' => $this->faker->sentences(5, true),
            'answer1' => $this->faker->words(5, true),
            'answer2' => $this->faker->words(5, true),
            'answer3' => $this->faker->words(5, true),
            'answer4' => $this->faker->words(5, true),
            'correct_answer' => $this->faker->randomElement(['answer1', 'answer2', 'answer3', 'answer4']),
            'sorting' => $this->faker->numberBetween(1, 15),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
