<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodect extends Model
{
    use HasFactory;
    protected $table = 'prodects';
    protected $fillable = [
        'id',
        'name_prod',
        'type_',
        'avelb',
        'discription',
        'prise',
        'img',
        'id_tager',
        'discount',

        
    ];
}
