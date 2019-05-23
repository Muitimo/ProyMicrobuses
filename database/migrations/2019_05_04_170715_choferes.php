<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Choferes extends Migration
{
    /**
     * Run the migrations.  
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Choferes', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fechaInicio');
            $table->date('fechaFin')->nullable();
            $table->unsignedInteger('id_chofer');            
            $table->unsignedInteger('id_interno');
            $table->foreign('id_chofer')->references('id')->on('Personas')
                ->OnUpdate('cascade')
                ->OnDelete('cascade');
            $table->foreign('id_interno')->references('id')->on('Microbuses')
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
        Schema::dropIfExists('Choferes');
    }
}
