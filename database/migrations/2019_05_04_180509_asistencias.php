<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Asistencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Asistencias', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->time('horaIngreso');
            $table->time('horaSalida')->nullable();
            $table->unsignedInteger('id_persona'); 
            $table->foreign('id_persona')->references('id')->on('Personas')
                ->OnUpdate('cascade')
                ->OnDelete('cascade');
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
        Schema::dropIfExists('Asistencias');
    }
}
