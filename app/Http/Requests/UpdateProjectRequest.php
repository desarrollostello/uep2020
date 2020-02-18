<?php

namespace App\Http\Requests;

use App\Project;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('proyecto_edit');
    }

    public function rules()
    {
        return [
            'entry_date'            => ['required',],
            'name'                  => ['required',],
            'internal_number'       => ['nullable',],
            'cfi_number'            => ['nullable',],
            'location_id'           => ['required',],
            'creditLine_id'         => ['required',],
            'state_id'              => ['required',],
            'sector_id'             => ['required',],
            'applicant'             => ['nullable',], // solicitante
            'mount'                 => ['required',],
            'size'                  => ['nullable',],
            'project_address'       => ['nullable',],
            'legal_address'         => ['nullable',],
            'phone'                 => ['nullable',],
            'email'                 => ['nullable',],
            'web'                   => ['nullable',],
            'products'              => ['nullable',],
            'ciuu'                  => ['nullable',],
            'mo'                    => ['nullable',],
            'inuep'                 => ['required',],
            'description'           => ['nullable',],
            'total_inversion'       => ['nullable',],
            'done_investment'       => ['nullable',],
            'investment_to_make_ct' => ['nullable',],
            'investment_to_make_af' => ['nullable',],
            'legalFigure_id'        => ['nullable',],
            'periodicity_id'        => ['nullable',],
            'destinationCredit_id'  => ['required',],
            'refinanced'            => ['nullable',],
            'grace_period'          => ['nullable',],
            'amortization_period'   => ['nullable',],
            'cant_disbursements'    => ['nullable',],
            'rate'                  => ['nullable',],
            'guarantie_id'          => ['nullable',],
            'guarantie_description' => ['nullable',],
            'credit_subject'        => ['required',],
            'bank_branche_id'       => ['nullable',],
            'date_shipping_bank'    => ['nullable',],
            'bank_response_date'    => ['nullable',],
            'bank_expiration_date'  => ['nullable',],
            'uep_approved_date'     => ['nullable',],
            'date_shipping_cfi'     => ['nullable',],
            'cfi_approved_date'     => ['nullable',],
            'tramdispo_date'        => ['nullable',],
            'comunicatran_date'     => ['nullable',],
            'disbursements_date'    => ['nullable',],
            'effective_date'        => ['nullable',],
            'desisted_date'         => ['nullable',],
            'judicial_date'         => ['nullable',],
            'cancelled_date'        => ['nullable',],
            'archived_date'         => ['nullable',],
            'last_movement_date'    => ['required',],
            'observations'          => ['nullable',],
            'user_id'               => ['nullable',],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El Nombre del Proyecto es obligatorio',
            'entry_date.required' => 'Deberá ingresar la fecha de Ingreso del Proyecto',
            'location_id.required' => 'Deberá seleccionar una localidad para el Proyecto',
            'creditLine_id.required' => 'Deberá seleccionar la Línea de Créditos para el Proyecto',
            'state_id.required' => 'Deberá seleccionar un Estado para el',
            'sector_id.required' => 'Deberá seleccionar un Sector para el Proyecto',
            'mount.required' => 'Deberá completar el Monto del Proyecto',
            'inuep.required' => 'Deberá seleccionar si el Proyecto está en la Unidad',
            'destinationCredit_id.required' => 'Deberá seleccionar el Destino del Crédito',
            'credit_subject.required' => 'Deberá seleccionar si el titular es Sujeto de Crédito',
            'last_movement_date.required' => 'Deberá colocar la Fecha del último movimiento del Proyecto',
        ];
    }
}
