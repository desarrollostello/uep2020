<?php

namespace App\Http\Requests;

use App\Location;
use Illuminate\Foundation\Http\FormRequest;

class StoreLocationRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('localidad_create');
    }

    public function rules()
    {
        return [
            'name'          => ['required'],
            'cp'            => ['nullable'],
            'province_id'   => ['required', 'exists:provinces,id'],
            'zone_id'       => ['required', 'exists:zones,id'],
            'dpto_id'       => ['required', 'exists:departaments,id'],
            'user_id'       => ['required', 'exists:users,id'],
        ];
    }

    public function messages()
     {
        return [
            'name.required' => 'El Nombre de la Localidad es obligatorio',
            'province_id.required' => 'Deberá seleccionar una Provincia',
            'zone_id.required' => 'Deberá seleccionar una Zona',
            'dpto_id.required' => 'Deberá seleccionar un Departamento',
        ];
    }
}
