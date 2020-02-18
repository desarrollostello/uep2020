<?php

namespace App\Http\Requests;

use App\CreditSubject;
use Illuminate\Foundation\Http\FormRequest;

class StoreCreditSubjectRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('sujetoCredito_create');
    }

    public function rules()
    {
        return [
            'project_id'            => ['required'],
        	'bank_branche_id'       => ['required'],
            'user_id'               => ['nullable'],
            'date_shipping_bank'    => ['required'],
            'bank_response_date'    => ['nullable'],
        	'credit_subject'        => ['required'],
            'description'           => ['nullable'],
        ];
    }

	public function messages()
     {
        return [
            'project_id.required' => 'Deberá seleccionar un Proyecto',
            'bank_branche_id.required' => 'Deberá seleccionar una Sucursal de un Banco',
        	'date_shipping_bank.required' => 'Deberá ingresar la fecha de envío al Banco',
        	'credit_subject.required' => 'Deberá seleccionar SI o NO',
        ];
    }
}
