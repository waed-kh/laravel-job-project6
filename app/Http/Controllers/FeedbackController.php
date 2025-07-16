<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use Illuminate\Support\Facades\Storage;

class FeedbackController extends Controller


{

     public function showForm()
    {
        return view('jobs.help'); 
    }
public function submitForm(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'subject' => 'nullable|string|max:255',
        'details' => 'nullable|string',
        'attachments.*' => 'file|mimes:jpeg,png,jpg,gif,mp4,avi,mov|max:20480', // 20MB
    ]);

    $files = [];
    if ($request->hasFile('attachments')) {
        foreach ($request->file('attachments') as $file) {
            $filename = $file->store('uploads/feedbacks', 'public');
            $files[] = $filename;
        }
    }

    Feedback::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'subject' => $validated['subject'] ?? '',
        'details' => $validated['details'] ?? '',
        'attachments' => $files,
    ]);

    return redirect()->route('feedback.form')->with('success', 'Feedback sent successfully!');
}
}