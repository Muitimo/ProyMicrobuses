<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Turnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Turnos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');            
            $table->unsignedInteger('id_interno'); 
            $table->unsignedInteger('id_chofer'); 
            $table->foreign('id_interno')->references('id')->on('Microbuses')
                ->OnUpdate('cascade')
                ->OnDelete('cascade');
            $table->foreign('id_chofer')->references('id')->on('Asistencias')
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
        Schema::dropIfExists('Turnos');
    }
}
