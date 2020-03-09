<?php

namespace App\Http\Requests;

use App\BankBranche;
use Illuminate\Foundation\Http\FormRequest;

class UpdateBankBranchesRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('sucursalCredito_edit');
    }

    public function rules()
    {
        return [
            'name'          => ['required'],
            'address'       => ['nullable'],
            'phone'         => ['nullable'],
            'email'         => ['nullable|email'],
            'contact'       => ['nullable'],
            'manager'       => ['nullable'],
            'bank_id'       => ['required', 'exists:banks,id'],
            'location_id'   => ['required', 'exists:locations,id'],
            'user_id'       => ['nullable|exists:users,id'],
        ];
    }

    public function messages()
     {
        return [
            'name.required'         => 'El Nombre de la Localidad es obligatorio',
            'bank_id.required'      => 'Deberá seleccionar un Banco',
            'location_id.required'  => 'Deberá seleccionar una Localidad',
        ];
    }
}
