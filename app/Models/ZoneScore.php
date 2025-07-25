<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZoneScore extends Model
{
    use HasFactory;

    protected $fillable = [
        'zone_id',
        'user_id',
        'score',
    ];
}
