<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activo', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('fechainicial');
            $table->string('fechafinal');
            $table->string('horainicial');
            $table->string('horafinal');
            $table->integer('periodominimo')->default(10);
            
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
        Schema::dropIfExists('activo');
    }
}
