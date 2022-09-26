<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseList>
 */
class CourseListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        return [
            'course_name' => $this->faker->randomElement(['Beginner Problem Solving', 'Medium Problem Solving',
            'Advanced Problem Solving', 'Beginner Computational Thinking', 'Medium Computational Thinking', 'Advanced Computational Thinking']),
            'slug' => $this->faker->unique()->slug,
            'price' => $this->faker->numberBetween(10000, 100000),
            'desc' => $this->faker->paragraphs(10, true),
        ];
    }
}
