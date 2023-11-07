<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerDetails extends Model
{
    use HasFactory;
    protected $table = 'seller_details'; 

    protected $fillable = [
        'user_id',
        'company_name',
        'authorised_person_name',
        'email',
        'city',
        'state',
        'your_name',
        'company_type',
        'website',
        'landline',
        'project_city',
        'property_type',
        'rera_number',
        'pan_number',
        'gst_number',
        'address',
        'created_at',
        'update_at'
    ];
}
