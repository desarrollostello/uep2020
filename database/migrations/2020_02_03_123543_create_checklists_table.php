<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChecklistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklists', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('date');
            $table->integer('official_note');
            $table->integer('checklist');

            $table->integer('financing_request'); //solicitud de Financiamiento
            $table->integer('dni_holder_and_spouse'); // DNI titular y conyuge
            $table->integer('domicile_certificate');  // Certificado de Domicilio
            $table->integer('cuit_gross_income'); //Inscripcion CUIT e Ingresos Brutos
            $table->integer('single');   // estado civil soltero
            $table->integer('married_certificate'); // Casada, Certificado de Matrimonio
            $table->integer('divorced');  // divorciado
            $table->integer('widower');   // viudo
            $table->integer('patrimonial_declaration');  // Declaración Jurada Patrimonial
            $table->integer('note_bank');  // Nota de la UEP al Banco para Sujeto de Crédito
            $table->integer('response_bank'); // Respuesta del Banco

            $table->integer('project_localization');  // titulo de Propiedad, contrato de Alquiler, Cesión, etc
            $table->integer('authorizations');  // Habilitaciones y Autorizaciones
            $table->integer('property_titles_certifications');  // Certificaciones, Titulos de Propiedad, contratos varios
            $table->integer('proforma_invoices');   // Facturas proformas
            $table->integer('project_formulation_guide');  // Guia de Formulación de Proyectos
            $table->integer('additional_information');  // Estadistica información Adicional
            $table->integer('promeva');
            $table->integer('uep_report');
            $table->integer('project_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checklists');
    }
}
