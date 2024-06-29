<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import the DB facade

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_student')->insert([
            ['name' => 'Anju', 'fk_parent_id' => 1, 'gender' => 'F'],
            ['name' => 'Alex', 'fk_parent_id' => 2, 'gender' => 'M'],
            ['name' => 'Rols', 'fk_parent_id' => 2, 'gender' => 'M'],
            ['name' => 'David', 'fk_parent_id' => 3, 'gender' => 'M'],
            ['name' => 'Abi', 'fk_parent_id' => 4, 'gender' => 'F'],
            ['name' => 'Jinu', 'fk_parent_id' => 5, 'gender' => 'F'],
            ['name' => 'Aju', 'fk_parent_id' => 5, 'gender' => 'M'],
        ]);
    }
}
