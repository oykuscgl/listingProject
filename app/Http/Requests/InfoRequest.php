<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'detailed_info' => 'required',
            'image'=> 'required|image|mimes:jpeg, png, jpg, gif, svg|max:2048',
        ];
    }
}
