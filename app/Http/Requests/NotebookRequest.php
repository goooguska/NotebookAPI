<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotebookRequest extends FormRequest
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
            'fullname' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'phone' => 'required|string|regex:/^\+?[1-9]\d{1,14}$/',
            'email' => 'required|email|max:255|unique:notebooks,email',
            'date_of_birth' => 'nullable|date',
            'image' => 'nullable|image|max:10240',
        ];
    }
}
