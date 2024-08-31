<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherClassModel extends Model
{
    use HasFactory;
    protected $table = 'teacherclass';

    protected $fillable = [
        'class_id',
        'teacher_id',
    ];

    public $timestamps = true;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
