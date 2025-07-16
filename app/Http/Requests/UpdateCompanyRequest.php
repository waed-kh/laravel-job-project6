<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
   public function rules(): array
{
    return [
        'name' => 'sometimes|required|string|max:255',
        'registration_number' => 'nullable|string',
        'business_type' => 'nullable|string',
        'employees_count' => 'nullable|integer',
        'country' => 'nullable|string',
        'bio' => 'nullable|string',
    ];
}

}
