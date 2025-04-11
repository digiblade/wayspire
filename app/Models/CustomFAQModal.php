<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomFAQModal extends Model
{
    use HasFactory;
    protected $table = 'custom_faqs';
    protected $fillable = [
        'question',
        'answer',
    ];
}
