<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;

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
    public function store(StoreCompanyRequest $request)
    {
        $company = company::create($request->validated());

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
        $company = company::findOrFail($id);

        return response()->json([
            'company' => $company,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, string $id)
    {
        $company = company::findOrFail($id);
        $company->update($request->validated());

        return response()->json([
            'message' => 'Company updated successfully',
            'company' => $company,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $company = company::findOrFail($id);
        $company->delete();

        return response()->json([
            'message' => 'Company deleted successfully',
        ]);
    }
}
