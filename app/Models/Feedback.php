<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model

{

      protected $table = 'feedbacks';
 protected $fillable = ['name', 'email', 'subject', 'details', 'attachments'];

protected $casts = [
    'attachments' => 'array',
];

}
