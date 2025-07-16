<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; 
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'registration_number' => 'nullable|string',
            'business_type' => 'nullable|string',
            'employees_count' => 'nullable|integer',
            'country' => 'nullable|string',
            'bio' => 'nullable|string',
        ];
    }
}

