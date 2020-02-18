<?php

namespace App\Http\Requests;

use App\ProjectRefinancing;
use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRefinancingRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('refinanciacionProyecto_create');
    }

    public function rules()
    {
        return [
            'user_id'             => ['required'],
        	'project_id'          => ['required'],
            'date'                => ['required'],
            'resolution'          => ['nullable'],
            'refinancing_amount'  => ['required'],
        	'rate'                => ['nullable'],
            'description'         => ['nullable'],
            'grace_period'        => ['required'],
            'amortization_period' => ['required'],
            'periodicity_id'      => ['required'],
        ];
    }


	public function messages()
     {
        return [
            'project_id.required' => 'Deberá Seleccionar un Proyecto para el Anexo',
            'date.required' => 'Deberá ingresar la fecha del anexo',
        	'refinancing_amount.required' => 'Deberá ingresar el monto de la Refinanciación',
        	'grace_period.required' => 'Deberá ingresar el nuevo periodo de gracia del proyecto',
        	'amortization_period.required' => 'Deberá ingresar el nuevo periodo de Amortización del Proyecto',
            'periodicity_id.required' => 'Deberá ingresar la Periodicidad de la Refinanciación',
        ];
    }
}
