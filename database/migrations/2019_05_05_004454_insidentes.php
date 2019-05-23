<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Insidentes extends Migration
{
    public function up()
    {
        Schema::create('Insidentes', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->time('hora');
            $table->string('descripcion', 200)->nullable();
            $table->bigInteger('longitud');
            $table->bigInteger('latitud');            
            $table->unsignedInteger('id_recorrido'); 
            $table->foreign('id_recorrido')->references('id')->on('Recorridos')
                ->OnUpdate('cascade')
                ->OnDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Insidentes');
    }
}
