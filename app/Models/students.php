<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    protected $fillable = [
        'teacher', 'class', 'grade', 'date', 'time',
    ];
    
    protected $hidden = [
        'remember_token',
    ];
}
