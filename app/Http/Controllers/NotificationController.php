<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
  use App\Models\User;
class NotificationController extends Controller
{
    


    public function latestLogins()
{
    $users = User::with('projects')
        ->whereNotNull('last_login_at')
        ->orderBy('last_login_at', 'desc')
        ->take(5)
        ->get();

    return view('jobs.index', compact('users'));
}

    

//
}
