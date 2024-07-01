<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentOptedCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $optedCourses = [
            ['id' => 1, 'student_id' => 1, 'course_id' => 1, 'is_active' => 0],
            ['id' => 2, 'student_id' => 1, 'course_id' => 4, 'is_active' => 0],
            ['id' => 3, 'student_id' => 2, 'course_id' => 1, 'is_active' => 0],
            ['id' => 4, 'student_id' => 3, 'course_id' => 2, 'is_active' => 0],
            ['id' => 5, 'student_id' => 3, 'course_id' => 4, 'is_active' => 0],
            ['id' => 6, 'student_id' => 4, 'course_id' => 2, 'is_active' => 0],
            ['id' => 7, 'student_id' => 4, 'course_id' => 1, 'is_active' => 0],
            ['id' => 8, 'student_id' => 4, 'course_id' => 3, 'is_active' => 0],
            ['id' => 9, 'student_id' => 5, 'course_id' => 3, 'is_active' => 0],
            ['id' => 10, 'student_id' => 6, 'course_id' => 2, 'is_active' => 0],
            ['id' => 11, 'student_id' => 7, 'course_id' => 1, 'is_active' => 0],
        ];

        // Insert the opted courses into the tbl_student_opted_course table
        DB::table('tbl_student_opted_course')->insert($optedCourses);
    }
}
