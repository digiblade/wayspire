<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomStepsModal extends Model
{
    protected $table = 'custom_steps';

    protected $fillable = [
        'title',
        'description',
        'section_1_title',
        'section_1_description',
        'section_1_icon',
        'section_1_color',
        'section_2_title',
        'section_2_description',
        'section_2_icon',
        'section_2_color',
        'section_3_title',
        'section_3_description',
        'section_3_icon',
        'section_3_color',
        'banner_image'
    ];
}
