<?php

namespace Database\Seeders;

use App\Models\CourseList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseListSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        CourseList::factory(15)->create();
    }
}
