<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class StudentModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'student';

    protected $fillable = [
        'class_id',
        'name',
        'surname',
        'phone',
        'email',
        'password',
        'license_type',
        'course_status',
        'token',
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public $timestamps = true;
}
