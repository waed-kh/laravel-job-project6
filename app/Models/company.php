<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $fillable=[
        'name','business_type' ,'employees_count','registration_number' ,'bio' ,'country'
    ];
}
