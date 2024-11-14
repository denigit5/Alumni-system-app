<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $fillable = ['job_id', 'alumnus_id', 'name', 'email', 'resume'];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function alumnus()
    {
        return $this->belongsTo(Alumnus::class);
    }
}

