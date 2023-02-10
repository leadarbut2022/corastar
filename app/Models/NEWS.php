<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NEWS extends Model
{
    use HasFactory;
    protected $table = 'n_e_w_s';
    protected $fillable = [
       
        'id_Poster',
        'name_poster',
        'addres_post',
        'discription',
        'img',
        'vedo',
        'day',
        'type_',


      
    ];

    // protected $casts = [
        
    //     'id_Poster'=> 'integer',
    //     'name_poster'=> 'integer',
    //     'addres_post'=> 'integer',
    //     'discription'=> 'integer',
    //     'img'=> 'integer',
    //     'vedo'=> 'integer',
    //     'day'=> 'integer',
    //     'type_'=> 'integer',
    // ];
}
