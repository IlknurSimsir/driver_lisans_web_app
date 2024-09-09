<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogModel extends Model
{
    use HasFactory;
    protected $table = 'logs';

    protected $fillable = [
        'User_id',
        'ip',
        'Kullanici_islem',
        'Tarih',
    ];
    public $timestamps = true;
}
