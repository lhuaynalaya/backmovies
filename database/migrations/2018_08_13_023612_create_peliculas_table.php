<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',200)->nullable()->comment = "";
            $table->integer('duracion_horas')->nullable();
            $table->integer('duracion_minutos')->nullable();
            $table->string('sinopsis',6000)->nullable()->comment = "";
            $table->integer('pais_id')->nullable();
            $table->string('pais_nombre',200)->nullable();
            $table->string('imagen',1000)->nullable()->comment = "";
            $table->integer('idioma_id')->nullable();
            $table->string('idioma_codigo',50)->nullable();
            $table->integer('censura_id')->nullable();
            $table->string('censura_nombre',50)->nullable()->comment = "";
            $table->integer('conpania_id')->nullable();
            $table->string('conpania_nombre',50)->nullable()->comment = "";
            $table->integer('ranking')->nullable();
            $table->integer('popularidad')->nullable();
            $table->integer('voto')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peliculas');
    }
}
