<?php

namespace App\Http\Requests;

use App\Bank;
use Illuminate\Foundation\Http\FormRequest;

class StoreBankRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('banco_create');
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
            'name.required' => 'El Nombre del Banco es obligatorio',
        ];
    }
}
