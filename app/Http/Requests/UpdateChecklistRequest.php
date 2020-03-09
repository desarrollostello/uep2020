<?php

namespace App\Http\Requests;

use App\Checklist;
use Illuminate\Foundation\Http\FormRequest;

class UpdateChecklistRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('checklist_edit');
    }

    public function rules()
    {
        return [
            'project_id'                        => ['required|exists:projects,id'],
            'user_id'                           => ['nullable|exists:users,id'],
            'date'                              => ['nullable'],
            'official_note'                     => ['nullable'],
            'checklist'                         => ['nullable'],
            'financing_request'                 => ['nullable'], //solicitud de Financiamiento
            'dni_holder_and_spouse'             => ['nullable'], // DNI titular y conyuge
            'domicile_certificate'              => ['nullable'], // Certificado de Domicilio
            'cuit_gross_income'                 => ['nullable'],  //Inscripcion CUIT e Ingresos Brutos
            'single'                            => ['nullable'],  // estado civil soltero
            'married_certificate'               => ['nullable'], // Casada, Certificado de Matrimonio
            'divorced'                          => ['nullable'], // divorciado
            'widower'                           => ['nullable'], // viudo
            'patrimonial_declaration'           => ['nullable'], // Declaración Jurada Patrimonial
            'note_bank'                         => ['nullable'], // Nota de la UEP al Banco para Sujeto de Crédito
            'response_bank'                     => ['nullable'],  // Respuesta del Banco
            'project_localization'              => ['nullable'],  // titulo de Propiedad, contrato de Alquiler, Cesión, etc
            'authorizations'                    => ['nullable'],  // Habilitaciones y Autorizaciones
            'property_titles_certifications'    => ['nullable'],  // Certificaciones, Titulos de Propiedad, contratos varios
            'proforma_invoices'                 => ['nullable'],   // Facturas proformas
            'project_formulation_guide'         => ['nullable'], // Guia de Formulación de Proyectos
            'additional_information'            => ['nullable'], // Estadistica información Adicional
            'promeva'                           => ['nullable'], 
            'uep_report'                        => ['nullable'], 
        ];
    }

    public function messages()
     {
        return [
            
        ];
    }
}
