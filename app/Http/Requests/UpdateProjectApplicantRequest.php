<?php

namespace App\Http\Requests;

use App\ProjectApplicant;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectApplicantRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('solicitanteProyecto_edit');
    }

    public function rules()
    {
        return [
            'project_id'            => ['required'],
            'user_id'               => ['nullable'],
            'name_last_name'        => ['required'],
            'date_birth'            => ['nullable'],
            'dni'                   => ['required'],
            'cuit'                  => ['nullable'],
            'legal_address'         => ['required'],
            'phone'                 => ['nullable'],
            'mail'                  => ['nullable'],
            'civil_state_id'        => ['required'],
            'location_id'           => ['required'],
            'name_last_name_partner'=> ['nullable'],
            'dni_partner'           => ['nullable'],
            'phone_partner'         => ['nullable'],
            'cuit_partner'          => ['nullable'],
            'date_birth_partner'    => ['nullable'],
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
