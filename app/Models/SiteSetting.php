<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'logo',
        'favicon',
        'phone',
         'email',
         'address',
         'facebook',
         'seo_title',
         'seo_keyword',
         'seo_content',
         'youtube',
         'linkdin',
         'twitter',
         'instagram',
         'whatsapp',
         'map',
         'copyright'	
    ];
}
