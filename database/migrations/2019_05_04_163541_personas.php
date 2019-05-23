<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Personas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Personas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ci');
            $table->string('nombre', 80)->unique();
            $table->char('sexo', 1);
            $table->date('fechaNacimiento');
            $table->integer('telefono');
            $table->string('direccion', 100)->nullable();
            $table->unsignedInteger('id_cargo');
            $table->foreign('id_cargo')->references('id')->on('Cargos')
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
        Schema::dropIfExists('Personas');
    }
}
