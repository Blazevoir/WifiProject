<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasurasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basura', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->bigInteger('idpuntoacceso')->nullable();
            $table->string('fecha')->nullable();
            $table->string('hora')->nullable();
            $table->string('mac')->nullable();          
            
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
        Schema::dropIfExists('basura');
    }
}
