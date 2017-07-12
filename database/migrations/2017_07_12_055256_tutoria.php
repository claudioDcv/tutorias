<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tutoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tutoria', function (Blueprint $table) {
        $table->increments('id');
        $table->datetime('make');
        $table->integer('status_id')->unsigned();
        $table->foreign('status_id')->references('id')->on('status');
        $table->integer('profesor_id')->unsigned();
        $table->foreign('profesor_id')->references('id')->on('profesor');
        $table->integer('alumno_id')->unsigned();
        $table->foreign('alumno_id')->references('id')->on('users');
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
        Schema::dropIfExists('tutoria');
    }
}
