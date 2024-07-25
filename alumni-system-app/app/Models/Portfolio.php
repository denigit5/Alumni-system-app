<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'basic_info',
        'education',
        'work_experience',
        'skills'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
