<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCidadeBrasilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cidade_brasil', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->unsignedBigInteger('estadobrasil_id');
            $table->foreign('estadobrasil_id')->references('id')->on('estado_brasil');
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
        Schema::dropIfExists('cidade_brasil');
    }
}
