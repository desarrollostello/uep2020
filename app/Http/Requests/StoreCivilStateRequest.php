<?php

namespace App\Http\Requests;

use App\CivilState;
use Illuminate\Foundation\Http\FormRequest;

class StoreCivilStateRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('estadocivil_create');
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
            'name.required' => 'El Nombre del Estado Civil es obligatorio',
        ];
    }
}
