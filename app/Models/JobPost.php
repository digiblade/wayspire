<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobPost extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'job_posts'; // Define table name if different from Laravel conventions

    protected $fillable = [
        'company_id',
        'title',
        'description',
        'location',
        'salary',
        'status',
    ];

    protected $casts = [
        'salary' => 'decimal:2',
        'status' => 'string',
    ];

    // Relationship: A JobPost belongs to a Company (User with role 'company')
    public function company()
    {
        return $this->belongsTo(User::class, 'company_id');
    }

    // Scope to get only approved job posts
    public function scopeApproved($query)
    {
        return $query->where('status', 'approved');
    }
}
