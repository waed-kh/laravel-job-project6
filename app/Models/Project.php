<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{






    protected $fillable = [
        'title',
        'company_name',
        'work_place',
        'gender_preference',
        'education_level_id',
        'work_experience',
        'business_man_id',
        'salary_range',
        'job_type',
        'category',
        'residency_country',
        'nationality',
        'views',
        'tags',
        'description',
        'posted_time'
    ];

    protected $casts = [
        'tags' => 'array', // لسهولة التعامل مع المهارات كـ array
    ];


     public function businessMan()
    {
        return $this->belongsTo(User::class, 'business_man_id');
    }

public function savedByUsers()
{
    return $this->belongsToMany(User::class, 'job_user', 'project_id', 'user_id')->withTimestamps();
}


    
}



