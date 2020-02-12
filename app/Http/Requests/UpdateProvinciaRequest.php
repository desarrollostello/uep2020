<?php

namespace App\Http\Requests;

use App\Provincia;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProvinciaRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('provincia_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
            ],
        ];
    }
}
