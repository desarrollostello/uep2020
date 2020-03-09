<?php

namespace App\Http\Requests;

use App\Project;
use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('project_create');
    }

    public function rules()
    {
        return [
            'entry_date'            => ['required|date',],
            'name'                  => ['required',],
            'internal_number'       => ['nullable',],
            'cfi_number'            => ['nullable|unique:projects,cfi_number|required_with:cfi_approved_date',],
            'location_id'           => ['required|exists:locations,id'],
            'creditLine_id'         => ['required|exists:creditLines,id'],
            'state_id'              => ['required|exists:states,id'],
            'sector_id'             => ['required|exists:sectors,id'],
            'applicant'             => ['nullable',], // solicitante
            'mount'                 => ['required',],
            'size'                  => ['nullable',],
            'project_address'       => ['required_with:uep_approved_date'],
            'legal_address'         => ['nullable',],
            'phone'                 => ['nullable',],
            'email'                 => ['nullable|email',],
            'web'                   => ['nullable',],
            'products'              => ['nullable',],
            'ciuu'                  => ['nullable',],
            'mo'                    => ['nullable|numeric'],
            'inuep'                 => ['required',],
            'description'           => ['nullable',],
            'total_inversion'       => ['nullable',],
            'done_investment'       => ['nullable',],
            'investment_to_make_ct' => ['nullable',],
            'investment_to_make_af' => ['nullable',],
            'legalFigure_id'        => ['required_with:uep_approved_date|exists:legalFigures,id'],
            'periodicity_id'        => ['required_with:uep_approved_date|exists:periodicities,id'],
            'destinationCredit_id'  => ['required_with:uep_approved_date|exists:destinationCredits,id'],
            'refinanced'            => ['required_with:effective_date'],
            'grace_period'          => ['nullable',],
            'amortization_period'   => ['nullable',],
            'cant_disbursements'    => ['nullable',],
            'rate'                  => ['nullable',],
            'guarantie_id'          => ['required_with:uep_approved_date|exists:guaranties,id'],
            'guarantie_description' => ['nullable',],
            'credit_subject'        => ['required_with:uep_approved_date',],
            'bank_branche_id'       => ['required_with:uep_approved_date|exists:bankBranches,id'],
            'date_shipping_bank'    => ['date|nullable|after:entry_date'],
            'bank_response_date'    => ['date|nullable|after:date_shipping_bank'],
            'bank_expiration_date'  => ['date|nullable|after:date_shipping_bank'],
            'uep_approved_date'     => ['date|nullable|after:bank_response_date'],
            'date_shipping_cfi'     => ['date|nullable|after:uep_approved_date'],
            'cfi_approved_date'     => ['date|nullable|after:date_shipping_cfi'],
            'tramdispo_date'        => ['date|nullable|after:cfi_approved_date'],
            'comunicatran_date'     => ['date|nullable|after:tramdispo_date'],
            'disbursements_date'    => ['date|nullable|after:cfi_approved_date'],
            'effective_date'        => ['date|nullable|after:comunicatran_date'],
            'desisted_date'         => ['ate|nullable|after:entry_date'],
            'judicial_date'         => ['date|nullable|after:effective_date'],
            'cancelled_date'        => ['date|nullable|after:effective_date'],
            'archived_date'         => ['date|nullable|after:cfi_approved_date'],
            'last_movement_date'    => ['date|nullable|after:entry_date'],
            'observations'          => ['nullable',],
            'user_id'               => ['nullable|exists:users,id'],
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
