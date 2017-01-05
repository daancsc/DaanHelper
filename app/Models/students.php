<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    protected $fillable = [
        'teacher', 'student','nick',
    ];
    
    protected $hidden = [
        'remember_token',
    ];
}
