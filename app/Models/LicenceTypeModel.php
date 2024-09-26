<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LicenceTypeModel extends Model
{
    use HasFactory;
    protected $table = 'license_type';

    protected $fillable = [
        'type',
        'explanation',
        'img'
    ];
}
