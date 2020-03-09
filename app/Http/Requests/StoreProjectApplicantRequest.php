<?php

namespace App\Http\Requests;

use App\ProyectApplicant;
use Illuminate\Foundation\Http\FormRequest;

class StoreProjectApplicantRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('solicitanteProyecto_create');
    }

    public function rules()
    {
        return [
            'project_id'            => ['required|exists:projects,id'],
            'user_id'               => ['nullable|exists:users,id'],
            'name_last_name'        => ['required'],
            'date_birth'            => ['nullable|date'],
        	'dni'                   => ['required'],
            'cuit'                  => ['nullable'],
            'legal_address'         => ['required'],
            'phone'                 => ['nullable'],
            'mail'                  => ['nullable|email'],
            'civil_state_id'        => ['required|exists:civilStates,id'],
            'location_id'           => ['required|exists:locations,id'],
            'name_last_name_partner'=> ['nullable'],
            'dni_partner'           => ['nullable'],
            'phone_partner'         => ['nullable'],
            'cuit_partner'          => ['nullable'],
            'date_birth_partner'    => ['nullable|date'],
        ];
    }

	public function messages()
     {
        return [
            'project_id.required'     => 'Deberá seleccionar un Proyecto',
            'name_last_name.required' => 'Deberá ingresar el Nombre y Apellido del Solicitante',
        	'dni.required'            => 'Deberá ingresar el DNI del Solicitante',
        	'legal_address.required'  => 'Deberá ingresar el Domicilio Legal del Solicitante',
            'civil_state_id.required' => 'Deberá seleccionar el Estado Civil del Solicitante',
            'location_id.required'    => 'Deberá seleccionar la Localidad del Solicitante',
        ];
    }
}
