<?php

namespace App\Http\Requests;

use App\DestinationCredit;
use Illuminate\Foundation\Http\FormRequest;

class StoreDestinationCreditRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('destinocredito_create');
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
            'name.required' => 'El Nombre del Destino del Crédito es obligatorio',
        ];
    }
}
