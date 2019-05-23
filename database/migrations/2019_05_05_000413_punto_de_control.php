<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PuntoDeControl extends Migration
{
    public function up()
    {
        Schema::create('Puntos_de_controles', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('nombre', 30);
            $table->bigInteger('longitud')->nullable();
            $table->bigInteger('latitud')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Puntos_de_controles');
    }
}
