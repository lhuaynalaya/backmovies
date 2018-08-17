<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',200)->nullable()->comment = "";
            $table->string('apellido_paterno', 50)->nullable()->comment = "";
            $table->string('apellido_materno',50)->nullable()->comment = "";
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
        Schema::dropIfExists('actores');
    }
}
