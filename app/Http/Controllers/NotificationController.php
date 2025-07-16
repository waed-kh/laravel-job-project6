<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    // عرض صفحة إعدادات المستخدم
    public function showSettings()
    {
        $user = Auth::user();
        return view('jobs.settenig', compact('user'));
    }

    // تحديث تفضيل اللغة
    public function updateLanguage(Request $request)
    {
        /** @var \App\Models\User $user */
$user = Auth::user();

        $request->validate([
            'language' => 'required|in:ar,en',
        ]);

        $user = Auth::user();
        $user->language_preference = $request->language;
        $user->save();
        

        return redirect()->back()->with('success', 'تم تحديث اللغة بنجاح');
    }

    // تحديث إعدادات الإشعارات
    public function updateNotifications(Request $request)
    {

        /** @var \App\Models\User $user */
$user = Auth::user();

        $enabled = $request->has('enabled');

        $user = Auth::user();
        $user->notifications_enabled = $enabled;
        $user->save();
        return redirect()->back()->with('success', 'تم تحديث إعدادات الإشعارات');
    }
}

