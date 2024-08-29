<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseStatusModel extends Model
{
     use HasFactory;
    protected $table = 'course_status';

    protected $fillable = [
        'status',
    ];

}
