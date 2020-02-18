<?php

namespace App\Http\Requests;

use App\Disbursement;
use Illuminate\Foundation\Http\FormRequest;

class UpdateDisbursementRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('desembolso_edit');
    }

    public function rules()
    {
        return [
            'project_id'    => ['required'],
            'date'          => ['required'],
            'nro'           => ['nullable'],
            'amount'        => ['required'],
            'description'   => ['nullable'],
            'payment'       => ['required'],
            'user_id'       => ['nullable'],
        ];
    }

    public function messages()
     {
        return [
            'project_id.required' => 'Deberá seleccionar un Proyecto',
            'date.required' => 'Deberá ingresar la fecha del desembolso',
            'amount.required' => 'Deberá ingresar el monto del Desembolso en pesos argentinos',
            'payment.required' => 'Deberá ingresar si el Desembolso ya fue cobrado o no por el titular',
        ];
    }
}
