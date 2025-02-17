<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    protected $fillable = ['job_post_id', 'name', 'email', 'mobile', 'resume'];

    public function jobPost()
    {
        return $this->belongsTo(JobPost::class);
    }
}
