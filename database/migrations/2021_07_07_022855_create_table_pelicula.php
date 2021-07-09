<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePelicula extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelicula', function (Blueprint $table) {
            $table->bigIncrements('idpelicula');
            $table->string('titulo', 100);
            $table->string('genero', 20);
            $table->string('duracion', 20)->nullable();
            $table->string('resumen', 1000)->nullable();
            $table->string('director', 100)->nullable();
            $table->string('urlubicacion', 200)->nullable();
            $table->string('clasificacion', 25)->nullable();
            $table->string('anioestreno', 4)->nullable();
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
        Schema::dropIfExists('pelicula');
    }
}
