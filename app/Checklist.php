<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checklist extends Model
{
    use SoftDeletes;

    protected $table = 'checklists';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'user_id',
        'date',
        'official_note',
        'checklist',
        'financing_request', //solicitud de Financiamiento
        'dni_holder_and_spouse', // DNI titular y conyuge
        'domicile_certificate', // Certificado de Domicilio
        'cuit_gross_income', //Inscripcion CUIT e Ingresos Brutos
        'single', // estado civil soltero
        'married_certificate', // Casada, Certificado de Matrimonio
        'divorced', // divorciado
        'widower', // viudo
        'patrimonial_declaration', // Declaración Jurada Patrimonial
        'note_bank', // Nota de la UEP al Banco para Sujeto de Crédito
        'response_bank', // Respuesta del Banco
        'project_localization', // titulo de Propiedad, contrato de Alquiler, Cesión, etc
        'authorizations', // Habilitaciones y Autorizaciones
        'property_titles_certifications', // Certificaciones, Titulos de Propiedad, contratos varios
        'proforma_invoices', // Facturas proformas
        'project_formulation_guide', // Guia de Formulación de Proyectos
        'additional_information', // Estadistica información Adicional
        'promeva',
        'uep_report',
        'project_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    
    /**
     * Retorna la Provincia a la que pertenece la Localidad
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function projects()
    {
        return $this->belongsTo('App\Project', 'project_id');
    }

    /**
     * Retorna el Codigo Postal de la Localidad
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}
