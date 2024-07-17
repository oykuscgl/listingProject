<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;


class ConsumerResearchRequest extends FormRequest{
    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'string|max:255',
            'detailed_info' => 'required|string',
        ];
    }

    public function messages(){
        return [
            'title.required'=> 'başlık girmek zorunlu',
            'title.max'=> 'başlık karakter sayısı max: 255',
            'description.required'=> 'açıklama girmek zorunlu',
            'detailed_info'=> 'detaylı açıklama girmek zorunlu.',
        ];
    }
}

