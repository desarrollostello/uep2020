<?php

namespace App\Http\Requests;

use App\Guarantie;
use Illuminate\Foundation\Http\FormRequest;

class StoreGuarantieRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('garantia_create');
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
            'name.required' => 'El Nombre de la Garantía es obligatorio',
        ];
    }
}
