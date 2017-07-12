<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Profesor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('profesor', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('rut')->unique();
          $table->string('complete_name');
          $table->date('init_working');
          $table->integer('id_asignature')->unsigned();
          $table->foreign('id_asignature')->references('id')->on('asignature');
          $table->integer('hour_value');
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profesor');
    }
}

/*
*	rut `string separado por guion`
*	complete_name `string`
*	init_working `tipo fecha`
*	asignature `FK asignature`
*	price_tutoria `integer`
*/
