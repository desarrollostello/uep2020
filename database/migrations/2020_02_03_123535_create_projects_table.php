<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('entry_date');
            $table->string('name')->unique();
            $table->string('internal_number')->unique();
            $table->integer('cfi_number')->unique();
            $table->unsignedInteger('location_id');
            $table->unsignedInteger('creditLine_id');
            $table->unsignedInteger('state_id');
            $table->unsignedInteger('sector_id');
            $table->string('applicant'); // Solicitante en String
            $table->double('mount');
            $table->string('size');
            $table->text('project_address');
            $table->text('legal_address');
            $table->string('phone');
            $table->string('email');
            $table->string('web');
            $table->string('products');
            $table->string('ciuu');
            $table->string('mo');
            $table->string('inuep');
            $table->text('description');
            $table->double('total_inversion');
            $table->double('done_investment'); // Inversión Realizada
            $table->double('investment_to_make_ct'); // Inversión a Realizada CT
            $table->double('investment_to_make_af'); // Inversión a Realizada AF
            $table->unsignedInteger('legalFigure_id');
            $table->unsignedInteger('periodicity_id');
            $table->unsignedInteger('destinationCredit_id');
            $table->string('refinanced');
            $table->integer('grace_period');
            $table->integer('amortization_period');
            $table->integer('cant_disbursements'); // cantidad de desembolsos
            $table->string('rate');
            $table->unsignedInteger('guarantie_id');
            $table->text('guarantie_description');
            $table->string('credit_subject'); // Sujeto de Crédito
            $table->unsignedInteger('bank_branche_id');
            $table->date('date_shipping_bank'); // Fecha Envio al Banco
            $table->date('bank_response_date'); // Fecha Respuesta del Banco
            $table->date('bank_expiration_date'); // Fecha CADUCO Banco
            $table->date('uep_approved_date'); // Fecha APROBADO UEP
            $table->date('date_shipping_cfi'); // Fecha Envio al CFI
            $table->date('cfi_approved_date'); // Fecha APROBADO CFI
            $table->date('tramdispo_date'); // Fecha TRAMDISPO
            $table->date('comunicatran_date'); // Fecha COMUNICATRAN
            $table->date('disbursements_date'); // Fecha Desembolso
            $table->date('effective_date'); // Fecha Efectivizacion
            $table->date('desisted_date'); // Fecha Desistido
            $table->date('judicial_date'); // Fecha Judicial
            $table->date('cancelled_date'); // Fecha Cancelado
            $table->date('archived_date'); // Fecha Archivado
            $table->date('last_movement_date'); // Fecha Ultimo Movimiento
            $table->text('observations');
            $table->unsignedInteger('user_id');
            $table->timestamps();
            $table->softDeletes();



            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->foreign('creditLine_id')->references('id')->on('credit_lines');
            
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('sector_id')->references('id')->on('sector');
            $table->foreign('creditLine_id')->references('id')->on('credit_lines');
            $table->foreign('legalFigure_id')->references('id')->on('legal_figures');

            $table->foreign('periodicity_id')->references('id')->on('periodicities');
            $table->foreign('destinationCredit_id')->references('id')->on('destination_credits');

            $table->foreign('guarantie_id')->references('id')->on('guaranties');
            $table->foreign('bank_branche_id')->references('id')->on('bank_branches');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
