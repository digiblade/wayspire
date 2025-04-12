<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomHomeScreenModal extends Model
{
    protected $table = 'custom_home_screens';

    protected $fillable = [
        'top_nav',
        'upscale_banner',
        'what_we_done_desc',
        'faq_banner',
        'footer_description',
    ];
}
