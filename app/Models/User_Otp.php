<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Otp extends Model
{
    use HasFactory;

    protected $table = 'user_otp'; 
    
    protected $fillable = [
        'otp',
        'mobile'
    ];
}
