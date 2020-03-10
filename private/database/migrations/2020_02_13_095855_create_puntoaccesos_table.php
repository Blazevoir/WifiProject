<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuntoaccesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puntoacceso', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('iduser')->unsigned()->index();
            $table->string('modelo');
            $table->string('ubicacion');
            $table->string('latitud');
            $table->string('longitud');
            $table->string('fechaalta');
            
            $table->timestamps();
            
            $table->foreign('iduser')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('puntoacceso');
    }
}
