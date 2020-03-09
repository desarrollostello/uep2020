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
            'project_id'            => ['required|exists:projects,id'],
        	'bank_branche_id'       => ['required|exists:bankBranches,id'],
            'user_id'               => ['nullable|exists:users,id'],
            'date_shipping_bank'    => ['required|date'],
            'bank_response_date'    => ['nullable|date'],
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
