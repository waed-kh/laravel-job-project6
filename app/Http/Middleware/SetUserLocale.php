<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class SetUserLocale
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->language_preference) {
            App::setLocale(Auth::user()->language_preference);
        } else {
            App::setLocale(config('app.locale')); // اللغة الافتراضية
        }

        return $next($request);
    }
}
