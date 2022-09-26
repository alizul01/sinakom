<?php

namespace Database\Seeders;

use App\Models\Submodul;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubModulSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Submodul::factory(35)->create();
    }
}
