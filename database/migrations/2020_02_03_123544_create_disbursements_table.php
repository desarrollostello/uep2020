<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisbursementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disbursements', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('proyect_id')->unsigned()->nullable();
            $table->date('date')->nullable();
            $table->string('nro',10)->nullable();
            $table->double('amount')->nullable();
            $table->text('description')->nullable();
            $table->string('payment',2)->nullable();
            $table->integer('user_id')->unsigned()
            
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
        Schema::dropIfExists('disbursements');
    }
}
