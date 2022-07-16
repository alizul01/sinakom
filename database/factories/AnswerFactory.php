<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Answer>
 */
class AnswerFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        return [
            'user_id' => rand(1, User::count()),
            'question_id' => rand(1, Question::count()),
            'answer' => $this->faker->randomElement(['answer1', 'answer2', 'answer3', 'answer4']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
