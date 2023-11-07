<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'seller_id',
        'project_image',
        'project_name',
        'project_type',
        'rera',
        'project_completion_date',
        'project_area',
        'min_price',
        'max_price',
        'project_description',
        'type',
        'area',
        'price',
        'units',
        'video_link',
        'project_brochure',
        'walk_through',
    ];
}
