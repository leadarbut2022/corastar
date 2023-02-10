<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class caed_interim extends Model
{
    use HasFactory;
    protected $table = 'CaedInterim';
    protected $fillable = [
        'name_prod',
        'type_',
        'avelb',
        'discription',
        'prise' ,
        'img',
        'id_tager',
        'id_pro',
        'id_clint',
        'clint_name'  ,
        'clint_addres' ,
        'clint_phone' ,
        'size',
        
    ];
}
