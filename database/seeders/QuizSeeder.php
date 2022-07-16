<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuizSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Quiz::factory(10)->create();
    }
}
