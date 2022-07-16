<?php

namespace Database\Seeders;

use App\Models\Modul;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ModulSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Modul::factory(20)->create();
    }
}
