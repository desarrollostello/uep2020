<?php

namespace App\Http\Requests;

use App\LegalFigure;
use Illuminate\Foundation\Http\FormRequest;

class UpdateLegalFigureRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('figuralegal_edit');
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
            'name.required' => 'El Nombre de la Figura Legal es obligatorio',
        ];
    }
}
