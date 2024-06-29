<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'tbl_student';
    protected $fillable = ['name', 'fk_parent_id', 'gender', 'is_active'];
    
    public function parent()
    {
        return $this->belongsTo(Parentstud::class, 'fk_parent_id');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'tbl_student_opted_course', 'student_id', 'course_id');
    }
    use HasFactory;
}
