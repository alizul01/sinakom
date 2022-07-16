<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\CourseList;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Membership>
 */
class MembershipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => rand(1, User::count()),
            'course_list_id' => rand(1, CourseList::count()),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
