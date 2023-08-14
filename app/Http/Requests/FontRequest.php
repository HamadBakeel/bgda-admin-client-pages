<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FontRequest extends BaseFormRequest
{
    public function store()
    {
        return [
            'name' => 'bail|required|max:40',
            'file' => 'required'
        ];
    }

    public function update()
    {
        return [
            'name' => 'bail|required|max:40',
            'file' => 'nullable'
        ];
    }
}
