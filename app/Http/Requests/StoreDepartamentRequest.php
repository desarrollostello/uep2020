<?php

namespace App\Http\Requests;

use App\Departament;
use Illuminate\Foundation\Http\FormRequest;

class StoreDepartamentRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('departament_create');
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
            'name.required' => 'El Nombre del Departamento es obligatorio',
        ];
    }
}
