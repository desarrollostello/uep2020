<?php

namespace App\Http\Requests;

use App\Province;
use Illuminate\Foundation\Http\FormRequest;

class StoreProvinceRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('provincia_create');
    }

    public function rules()
    {
        return [
            'name' => ['required',],
        ];
    }

    public function messages()
     {
        return [
            'name.required' => 'El Nombre de la Provincia es obligatorio',
        ];
    }
}
