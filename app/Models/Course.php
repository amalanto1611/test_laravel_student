<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'tbl_course';

    public function students()
    {
        return $this->belongsToMany(Student::class, 'tbl_student_opted_course', 'course_id', 'student_id');
    }
}
