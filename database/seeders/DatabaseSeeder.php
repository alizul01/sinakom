<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\QuizSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\LevelSeeder;
use Database\Seeders\ModulSeeder;
use Database\Seeders\AnswerSeeder;
use Database\Seeders\ResultSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\QuestionSeeder;
use Database\Seeders\SubModulSeeder;
use Database\Seeders\CourseListSeeder;
use Database\Seeders\MembershipSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            LevelSeeder::class,
            CategorySeeder::class,
            ModulSeeder::class,
            SubModulSeeder::class,
            QuizSeeder::class,
            CourseListSeeder::class,
            MembershipSeeder::class,
            QuestionSeeder::class,
            AnswerSeeder::class,
            ResultSeeder::class
        ]);
    }
}
