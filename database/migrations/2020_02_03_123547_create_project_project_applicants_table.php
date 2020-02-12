<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_applicants', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('project_id')->unsigned();
            $table->string('name_last_name');
            $table->date('date_birth')->nullable();

            $table->string('dni',8)->nullable();
            $table->string('cuit',13)->nullable();
            $table->string('legal_address')->nullable();
            $table->string('phone',50)->nullable();
            $table->string('mail',100)->nullable();
            $table->integer('civil_state_id')->unsigned();
            $table->integer('location_id')->unsigned()->nullable();
            $table->string('name_last_name_partner')->nullable();
            $table->string('dni_partner',8)->nullable();
            $table->string('phone_partner',50)->nullable();
            $table->string('cuit_partner',13)->nullable();
            $table->date('date_birth_partner')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('civil_state_id')->references('id')->on('civil_states');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_applicants');
    }
}
