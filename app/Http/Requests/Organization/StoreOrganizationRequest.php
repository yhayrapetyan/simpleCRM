<?php

namespace App\Http\Requests\Organization;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrganizationRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255', 'unique:organizations,title'],
            'website' => ['required', 'string', 'max:255', 'url'],
            'address' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
        ];
    }
}
