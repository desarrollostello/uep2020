<?php

namespace App\Http\Requests;

use App\Zone;
use Illuminate\Foundation\Http\FormRequest;

class StoreZoneRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('zona_create');
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
            'name.required' => 'El Nombre de la Zona es obligatorio',
        ];
    }
}
