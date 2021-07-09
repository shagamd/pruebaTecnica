<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRelusuariopelicula extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relusuariopelicula', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("idusuario");
            $table->unsignedBigInteger("idpelicula");
            $table->integer('calificacion');
            $table->timestamps();

            $table->foreign('idusuario')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('idpelicula')
                ->references('idpelicula')
                ->on('pelicula')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relusuariopelicula');
    }
}
