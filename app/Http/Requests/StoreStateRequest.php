<?php

namespace App\Http\Requests;

use App\State;
use Illuminate\Foundation\Http\FormRequest;

class StoreStateRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('estado_create');
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
            'name.required' => 'El Nombre del Estado es obligatorio',
        ];
    }
}
