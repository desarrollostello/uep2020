<?php

namespace App\Http\Requests;

use App\Periodicity;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePeriodicityRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('periodicidad_edit');
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
            'name.required' => 'El Nombre de la Periodicidad es obligatorio',
        ];
    }
}
