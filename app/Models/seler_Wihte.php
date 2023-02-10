<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seler_Wihte extends Model
{
    use HasFactory;
    protected $table = 'SelerWihte';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'id_nash',
        'password',
       
    
    ];
}
