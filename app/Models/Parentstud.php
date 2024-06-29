<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parentstud extends Model
{
    use HasFactory;

    protected $table = 'tbl_parent';

    public function students()
    {
        return $this->hasMany(Student::class, 'fk_parent_id');
    }
}
