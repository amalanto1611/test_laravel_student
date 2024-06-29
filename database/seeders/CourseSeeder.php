<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import the DB facade

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_course')->insert([
            ['course_name' => 'English', 'dept' => 'English'],
            ['course_name' => 'Mathematics', 'dept' => 'Maths'],
            ['course_name' => 'Science', 'dept' => 'Science'],
            ['course_name' => 'Economics', 'dept' => 'Science'],
        ]);
    }
}
