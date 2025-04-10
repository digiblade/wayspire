<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomJourneyModal extends Model
{
    protected $table = 'custom_student_journeys';

    protected $fillable = [
        'title',
        'description',
        
        'banner_image',
        'timeline_image'
    ];
}
