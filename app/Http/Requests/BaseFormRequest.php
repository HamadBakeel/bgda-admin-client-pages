<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BaseFormRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return match ($this->method()) {
            'POST' => $this->store(),
            'PUT' => $this->update(),
            'PATCH' => $this->restore(),
            'DELETE' => $this->destroy(),
            'GET' => $this->view(),
            'default' => $this->view(),
        };
    }

    public function view()
    {
        return [];
    }
    public function store()
    {
        return [];
    }
    public function update()
    {
        return [];
    }
    public function destroy()
    {
        return [];
    }

    public function restore()
    {
        return [];
    }
}