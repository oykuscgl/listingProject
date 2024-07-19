<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecipeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|array',
            'category_id' => 'required|string|max:255',
            'detailed_info' => 'required|string',
            'image'=> 'image|mimes:jpeg, png, jpg, gif, svg|max:2048',
        ];
    }
}
