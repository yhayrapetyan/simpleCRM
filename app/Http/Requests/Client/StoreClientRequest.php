<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'organization_id' => ['required', 'exists:organizations,id'],
            'name' => ['required', 'string', 'max:255', 'unique:clients,name'],
            'email' => ['required', 'email', 'unique:clients,email'],
            'phone' => ['required', 'string', 'unique:clients,phone'],
        ];
    }
}
