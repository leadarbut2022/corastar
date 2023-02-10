<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class msg extends Model
{
    use HasFactory;
    protected $table = 'msgs';
    protected $fillable = [
        'id_clint',
        'msg_user',
        'msg_admin',
        'stat',
    
    ];
}

  