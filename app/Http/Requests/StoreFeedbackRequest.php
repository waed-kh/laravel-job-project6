<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFeedbackRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'nullable|string|max:255',
            'details' => 'nullable|string',
            'attachments.*' => 'file|mimes:jpeg,png,jpg,gif,mp4,avi,mov|max:20480',
        ];
    }
}
