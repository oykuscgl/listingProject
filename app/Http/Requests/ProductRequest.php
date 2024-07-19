<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'stock' => 'required|integer',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'shelf_life' => 'nullable|string',
            'product_code' => 'nullable|string',
            'pallet' => 'nullable|string',
            'packaging' => 'nullable|string',
            'detailed_description' => 'nullable|longText',
            'image'=> 'required|image|mimes:jpeg, png, jpg, gif, svg|max:2048',
        ];
    }
}
