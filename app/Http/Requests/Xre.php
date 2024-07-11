<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Xre extends FormRequest
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
            "name"=> "required|string|max:255",
            "email"=> "required|email|unique:users|max:255",
            "password"=> "required|string|min:8|confirmed",
            //
        ];
    }

    public function messages(): array
    {
        return [
            "name.required"=> "The name field is required",
            "name.string"=> "Name must be a string",
            "name.max"=> "Max characters for name is 255",
            "email.required"=> "The email field is required",
            "email.email"=> "Invalid mail address",
            "email.unique"=> "Email address is already in use",
            'password.required' => 'The password field is required.',
            'password.string' => 'The password field must be a string.',
            'password.min' => 'The password must be at least 8 characters long.',
            'password.confirmed' => 'The password confirmation does not match.',
        ];
    }
}
