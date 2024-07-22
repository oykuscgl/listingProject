<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;


class HRRequest extends FormRequest{
    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'detailed_info' => 'required|string',
        ];
    }

    public function messages(){
        return [
            'detailed_info'=> 'detaylı açıklama girmek zorunlu.',
        ];
    }
}

