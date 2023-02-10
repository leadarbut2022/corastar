<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seler extends Model
{
    use HasFactory;
    protected $table = 'selers';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'id_nash',
        'password',
        'photo',
        'mohfza' ,
        'city_',
        'ather_infoirm',
    ];
}
