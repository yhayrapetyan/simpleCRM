<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateClientRequest extends FormRequest
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
            'organization_id' => ['required', 'exists:organizations,id'],
            'name' => ['required', 'string', 'max:255', Rule::unique('clients', 'name')->ignore($this->client)],
            'email' => ['required', 'email', Rule::unique('clients', 'email')->ignore($this->client)],
            'phone' => ['required', 'string', Rule::unique('clients', 'phone')->ignore($this->client)],
        ];
    }
}
