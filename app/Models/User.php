<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use  HasApiTokens ,HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
 

    


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
   protected function casts(): array
{
    return [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'notifications_enabled' => 'boolean'
    ];
}












    

// في User.php
 public function projects()
    {
        return $this->hasMany(Project::class, 'business_man_id');
    }

 protected $dates = [
        'last_login_at',
    ];

public function savedProjects()
{
    return $this->belongsToMany(Project::class, 'job_user', 'user_id', 'project_id')->withTimestamps();
}



protected $fillable = [
    'name',
    'email',
    'password',
    'last_login_at',
    'language_preference',   // أضف هذا
    'notifications_enabled', // وأضف هذا
];






}


