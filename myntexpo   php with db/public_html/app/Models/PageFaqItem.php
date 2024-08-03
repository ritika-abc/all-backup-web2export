<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageFaqItem extends Model
{
    protected $fillable = [
        'name',
        'content',
        'status',
        'seo_title',
        'seo_meta_description'
    ];

}