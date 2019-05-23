<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Microbuses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Microbuses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('interno');
            $table->string('placa', 10)->unique();
            $table->string('marca', 20)->nullable();
            $table->string('modelo', 20)->nullable();
            $table->integer('nropasajeros');
            $table->unsignedInteger('id_propietario');
            $table->foreign('id_propietario')->references('id') ->on('Personas')
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
        Schema::dropIfExists('Microbuses');
    }
}
