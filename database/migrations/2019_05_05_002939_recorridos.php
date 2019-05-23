<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Recorridos extends Migration
{
    public function up()
    {
        Schema::create('Recorridos', function (Blueprint $table) {
            $table->increments('id');
            $table->time('horaLLegada');
            $table->time('horaSalida')->nullable();            

            $table->unsignedInteger('id_turno'); 
            $table->unsignedInteger('id_rol');

            $table->unsignedInteger('id_punto_control'); 
            $table->foreign('id_punto_control')->references('id')->on('Puntos_de_controles')
                ->OnUpdate('cascade')
                ->OnDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Recorridos');
    }
}
