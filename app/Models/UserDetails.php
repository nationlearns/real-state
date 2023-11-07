<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;
    protected $table = 'user_details'; 

    protected $fillable = [
        'user_id',
        'city',
        'state',
        'intrested_in',
        'budget',
        'required_loans',
        'prefered_bank',
        'annual_income',
        'marital_status',
        'created_at',
        'updated_at'
    ];
}
