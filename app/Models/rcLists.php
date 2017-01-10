<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rclists extends Model
{
    protected $fillable = [
        'date', 'time', 'stuEmail', 'status',
    ];
}
