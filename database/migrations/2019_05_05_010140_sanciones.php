<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sanciones extends Migration
{
    public function up()
    {
        Schema::create('Sanciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('motivo', 80)->nullable();
            $table->date('fecha');
            $table->time('hora');
            $table->double('monto'); 
            $table->integer('tiempo');
            $table->unsignedInteger('id_chofer');
            $table->unsignedInteger('id_recorrido');
            $table->foreign('id_chofer')->references('id')->on('Choferes')
                ->OnUpdate('cascade')
                ->OnDelete('cascade');
            $table->foreign('id_recorrido')->references('id')->on('Recorridos')
                ->OnUpdate('cascade')
                ->OnDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Sanciones');
    }
}
