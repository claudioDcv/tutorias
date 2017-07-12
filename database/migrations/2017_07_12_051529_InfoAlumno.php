<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InfoAlumno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('info_alumno', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('rut')->unique();
        $table->string('complete_name');
        $table->date('birth_date');
        $table->string('address');
        $table->string('phones');
        $table->integer('user_id')->unsigned();
        $table->foreign('user_id')->references('id')->on('users');
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
        //
    }
}
