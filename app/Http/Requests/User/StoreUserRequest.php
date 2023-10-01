<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // !!!!!!!!!!!! temporary
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required','email', 'max:255', 'unique:users,email'],
            'phone' => ['required', 'string', 'max:255','unique:users,phone'],
            'address' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'role_id' => ['int']
        ];
    }
}
