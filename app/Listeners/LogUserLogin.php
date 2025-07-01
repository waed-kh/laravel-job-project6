<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use App\Models\User; // تأكد من استيراده

class LogUserLogin
{
    public function handle(Login $event)
    {
        /** @var User $user */
        $user = $event->user; // الآن محررك يعرف أنه User
        $user->last_login_at = now();
        $user->save();
    }
}
