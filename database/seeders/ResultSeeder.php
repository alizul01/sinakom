<?php

namespace Database\Seeders;

use App\Models\Result;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ResultSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Result::factory(25)->create();
    }
}
