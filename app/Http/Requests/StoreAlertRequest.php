<?php

namespace App\Http\Requests;

use App\Alert;
use Illuminate\Foundation\Http\FormRequest;

class StoreAlertRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('alerta_create');
    }

    public function rules()
    {
        return [
            'name'     => ['required'],
            'state'    => ['nullable'],
            'cod'      => ['required'],
            'color'    => ['required'],
            'days'     => ['required|numeric'],
            'sql'      => ['nullable'],
            'message'  => ['required'],
        ];
    }
	
	public function messages()
     {
        return [
            'name.required'    => 'El Nombre de la Alerta es obligatorio',
        	'cod.required'     => 'El código de la Alerta es obligatorio',
        	'color.required'   => 'El Color de la Alerta es obligatorio',
        	'days.required'    => 'Los días de la Alerta es obligatorio',
            'message.required' => 'El Mensaje de la Alerta es obligatorio',
        ];
    }
}
