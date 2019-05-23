<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Roles extends Migration
{
    
    public function up()
    {
        Schema::create('Roles', function (Blueprint $table) {
            $table->unsignedInteger('id_turno'); 
            $table->integer('id');
            $table->time('horaSalida');
            $table->time('horaLLegada')->nullable();            
            $table->primary(['id_turno', 'id']);
            $table->foreign('id_turno')->references('id')->on('Turnos')
                ->OnUpdate('cascade')
                ->OnDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Roles');
    }
}
