<?php

namespace App\Http\Requests;

use App\CreditLine;
use Illuminate\Foundation\Http\FormRequest;

class StoreCreditLineRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('lineasCredito_create');
    }

    public function rules()
    {
        return [
            'name'                 => ['required'],
        	'description'          => ['required'],
            'maximum_amount'       => ['required'],
            'maximum_grace'        => ['required|numeric'],
            'maximum_amortization' => ['required|numeric'],
        	'rate'                 => ['required'],
        ];
    }

	public function messages()
     {
        return [
            'name.required' => 'El Nombre de la Línea de Créditos es obligatorio',
            'rate.required' => 'La Tasa de la Línea de Créditos es obligatoria',
        	'description.required' => 'La Descripción de la Línea de Créditos es obligatoria',
        	'maximum_amount.required' => 'El Máximo Monto de la Línea de Créditos es obligatorio',
        	'maximum_grace.required' => 'El Plazo de Gracia Máximo de la Línea de Créditos es obligatorio',
        	'maximum_amortization.required' => 'El Plazo de Amortización Máximo de la Línea de Créditos es obligatorio',
        ];
    }
}
