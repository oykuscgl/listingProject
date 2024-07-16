<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;


class NewsPostRequest extends FormRequest{
    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|array',
            'category' => 'required|string|max:255',
            'detailed_info' => 'required|string',
        ];}
    }

