<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvitationRequest extends BaseFormRequest
{
    public function store()
    {

        return [
            'font_id' => 'bail|required|exists:fonts,id',
            'title' => 'bail|required|max:100',
            'image' => 'required|image|mimes:jpg,png,jpeg,webp',
            'font_color' => 'nullable|max:15'
        ];
    }

    public function update()
    {
        return [
            'font_id' => 'bail|required|exists:fonts,id',
            'title' => 'bail|required|max:100',
            'image' => 'required|image|mimes:jpg,png,jpeg,webp',
            'font_color' => 'nullable|max:15'
        ];
    }
}
