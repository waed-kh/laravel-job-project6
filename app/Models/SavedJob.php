<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SavedJob extends Model
{
    protected $fillable = ['user_id', 'job_id'];

    // علاقة مع المستخدم
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // علاقة مع الوظيفة (Project)
    public function job()
    {
        return $this->belongsTo(Project::class, 'job_id');
    }
}

