<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'github_link', 'files'];

    // Cast 'files' to an array
    protected $casts = [
        'files' => 'array',
    ];
}
