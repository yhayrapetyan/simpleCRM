<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($this->user)],
            'phone' => ['required', 'string', 'max:255', Rule::unique('users', 'phone')->ignore($this->user)],
            'address' => ['required', 'string', 'max:255'],
            'password' => ['sometimes', 'string', 'min:8'],
            'role_id' => ['required', 'int']
        ];
    }
}
