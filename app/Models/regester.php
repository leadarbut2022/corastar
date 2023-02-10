<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class regester extends Model
{
    use HasFactory;
   
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
      
        'mohfza' ,
        'city_',
        'ather_infoirm',
        'facebook_id',
    ];
}




// $table->increments('id');
// $table->string('name');
// $table->string('email');
// $table->integer('phone');
// $table->string('pass');
// $table->string('photo');
// $table->string('mohfza');
// $table->string('city_');
// $table->string('ather_infoirm');