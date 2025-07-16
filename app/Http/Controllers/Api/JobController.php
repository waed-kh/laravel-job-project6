<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\company;
use App\Models\Project;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return Project::all();
    }

    public function store(Request $request)
    {
        $job = Project::create($request->all());
        return response()->json (['message' => 'Job created successfully',$job], 201);

         $data = $request->validate([
        'name' => 'required|string|max:255',
        'business_type' => 'nullable|string',
        'employees_count' => 'nullable|numeric',
        'registration_number' => 'nullable|string',
        'bio' => 'nullable|string',
    ]);

    $company = company::create($data);

    return response()->json(['success' => true, 'company' => $company], 201);
    }



   

    public function show($id)
{
    $job = Project::findOrFail($id);

    return view('job-details', compact('job'));
}


   public function update(Request $request, $id)
{
    $project = Project::findOrFail($id);
    $project->update($request->all());

    return response()->json([
        'message' => 'Project updated successfully.',
        'data' => $project
    ]);
}


    public function destroy($id)
    {
        Project::destroy($id);
        return response()->json (['message' => 'Job deleted successfully'], 201);
    }
}
