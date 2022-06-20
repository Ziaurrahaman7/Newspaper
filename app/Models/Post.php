<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'slug',
        'feather_image',
        'vedio',
        'description',
        'status',
        'seo_title',
        'seo_keyword',
        'seo_description'
    ];
}
