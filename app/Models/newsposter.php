<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newsposter extends Model
{
    use HasFactory;
    protected $table = 'newsposters';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'photo',
      
    ];
}
