<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherModel extends Model
{
    use HasFactory;
    protected $table = 'teacher';

    protected $fillable = [
        'name',
        'surname',
        'phone',
        'email',
        'explanation',
        'lesson_id',
        'photo',
    ];

    protected $dates = ['created_at', 'updated_at'];

    public $timestamps = true;
}
