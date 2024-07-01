<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            ['id' => 1, 'name' => 'Anju', 'fk_parent_id' => 1, 'gender' => 'F'],
            ['id' => 2, 'name' => 'Alex', 'fk_parent_id' => 2, 'gender' => 'M'],
            ['id' => 3, 'name' => 'Rols', 'fk_parent_id' => 2, 'gender' => 'M'],
            ['id' => 4, 'name' => 'David', 'fk_parent_id' => 3, 'gender' => 'M'],
            ['id' => 5, 'name' => 'Abi', 'fk_parent_id' => 4, 'gender' => 'M'],
            ['id' => 6, 'name' => 'Jinu', 'fk_parent_id' => 5, 'gender' => 'F'],
            ['id' => 7, 'name' => 'Aju', 'fk_parent_id' => 5, 'gender' => 'M'],
        ];

        // Insert the students into the tbl_student table
        DB::table('tbl_student')->insert($students);
    }
}
