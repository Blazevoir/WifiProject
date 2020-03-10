<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConexionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conexion', function (Blueprint $table) {
            // conexión: id, idpuntoacceso, fecha, hora, mac
            $table->bigIncrements('id');
            
            $table->bigInteger('idpuntoacceso')->unsigned();
            $table->string('fecha')->nullable();
            $table->string('hora')->nullable();
            $table->string('mac');          
            
            $table->timestamps();
            
            $table->foreign('idpuntoacceso')->references('id')->on('puntoacceso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conexion');
    }
}
