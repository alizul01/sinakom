<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnswerSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Answer::factory(50)->create();
    }
}
