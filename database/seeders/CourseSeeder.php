<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            ['id' => 1, 'course_name' => 'English',  'dept' => 'English'],
            ['id' => 2, 'course_name' => 'Mathematics',  'dept' => 'Maths'],
            ['id' => 3, 'course_name' => 'Science',  'dept' => 'Science'],
            ['id' => 4, 'course_name' => 'Economics', 'dept' => 'Science'],
        ];

        // Insert the courses into the tbl_course table
        DB::table('tbl_course')->insert($courses);
    }
}
