<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSideModel extends Model
{
    use HasFactory;
    protected $table = 'user_side';
    protected $fillable = [
        'mainInfo',
        'driverStage1',
        'driverStage2',
        'driverStage3',
        'aboutUsInfo',
        'driverLicenceInfo',
        'teacherInfoTheoretical',
        'teacherInfoPractical',
        'vehicleInfo'
    ];

    public $timestamps = true;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
