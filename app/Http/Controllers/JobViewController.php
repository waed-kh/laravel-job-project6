<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Project;
use App\Models\company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\SavedJob;

use Illuminate\Support\Facades\Auth;

class JobViewController extends Controller
{
 public function index()
{
   
    $jobs = Project::all();

    $users = User::whereNotNull('last_login_at')
                ->orderBy('last_login_at', 'desc')
                ->take(5)
                ->get();

    return view('jobs.index', compact('jobs', 'users'));
}

    public function show($id)
    {
        $job = Project::find($id);

        if (!$job) {
            return abort(404, 'Job not found');
        }

        return view('jobs.show', compact('job'));
    }
    public function showCompany()
    {
         $company = company::first();
        $projects = Project::latest()->take(10)->get(); // 10 وظائف حديثة
        return view('company.index', compact('projects' ,'company'));
    }



public function saveJob($id){
{

    if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'يجب تسجيل الدخول');
    }

    $user = Auth::user();

    // تأكد إن العلاقة شغالة
    try {
        if (!$user->savedProjects()->where('project_id', $id)->exists()) {
            $user->savedProjects()->attach($id);
        }
    } catch (\Exception $e) {
        dd('Error:', $e->getMessage());
    }

    return redirect()->back()->with('success', 'تم الحفظ');
}



   
}

public function savedJobs()
{
    $user = Auth::user();
    $jobs = $user->savedProjects; // يرجع Collection

    return view('book.bookmark', compact('jobs'));
}



    
}


  


 




