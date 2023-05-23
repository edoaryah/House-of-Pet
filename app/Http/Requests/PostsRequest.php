<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostsRequest extends FormRequest
{
    
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'min:5', 'max:255'],
            'text'  => ['required', 'string', 'min:5'],
        ];
    }
}
