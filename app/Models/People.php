<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $table = 'cruds';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'shirt'
    ];
    

   
}
