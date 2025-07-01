<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          return company::all();
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'registration_number' => 'nullable|string',
        'business_type' => 'nullable|string',
        'employees_count' => 'nullable|integer',
        'country' => 'nullable|string',
        'bio' => 'nullable|string',
    ]);

    $company = company::create($data);

    return response()->json([
        'message' => 'Company created successfully',
        'company' => $company,
    ], 201);
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
