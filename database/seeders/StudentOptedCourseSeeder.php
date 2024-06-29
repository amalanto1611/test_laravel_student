<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import the DB facade

class StudentOptedCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_student_opted_course')->insert([
            ['student_id' => 1, 'course_id' => 1, 'is_active' => 0],
            ['student_id' => 1, 'course_id' => 4, 'is_active' => 0],
            ['student_id' => 2, 'course_id' => 1, 'is_active' => 0],
            ['student_id' => 3, 'course_id' => 2, 'is_active' => 0],
            ['student_id' => 3, 'course_id' => 4, 'is_active' => 0],
            ['student_id' => 4, 'course_id' => 2, 'is_active' => 0],
            ['student_id' => 4, 'course_id' => 1, 'is_active' => 0],
            ['student_id' => 4, 'course_id' => 3, 'is_active' => 0],
            ['student_id' => 5, 'course_id' => 3, 'is_active' => 0],
            ['student_id' => 6, 'course_id' => 2, 'is_active' => 0],
            ['student_id' => 7, 'course_id' => 1, 'is_active' => 0],
        ]);
    }
}
