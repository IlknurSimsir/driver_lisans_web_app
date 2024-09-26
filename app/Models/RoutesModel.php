<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoutesModel extends Model
{
    use HasFactory;
    protected $table = 'routes';

    protected $fillable = [
        'title',
        'content',
        'videoUrl',
        'activimapUrlty',
    ];

    public $timestamps = true;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
