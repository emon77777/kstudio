<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_logo',
        'home_back_image',
        'home_video',
        'home_banner',
        'about_banner',
        'service_banner',
        'portfolio_banner',
        'contact_banner',
        'footer_short_text',
        'facebook',
        'twitter',
        'linkedin',
        'youtube'
    ];
}
