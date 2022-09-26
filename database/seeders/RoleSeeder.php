<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
       $role = [
            ['role_name' => 'Admin'],
            ['role_name' => 'Teacher'],
            ['role_name' => 'Student'],
        ];

        DB::table('roles')->insert($role);
    }
}
