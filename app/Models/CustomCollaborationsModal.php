<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomCollaborationsModal extends Model
{
    use HasFactory;
    protected $table = 'custom_collaborations';
    protected $fillable = [
        'logo_image',
        'logo_name',
        'logo_url',
        'row_index'
    ];
}
