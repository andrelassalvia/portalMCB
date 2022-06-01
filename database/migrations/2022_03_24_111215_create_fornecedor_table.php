<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedor', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable();
            $table->string('nome_contato')->nullable();
            $table->string('telefone');
            $table->string('email')->nullable();
            $table->string('zap')->nullable();
            $table->unsignedBigInteger('estadobrasil_id')->nullable();
            $table->foreign('estadobrasil_id')->references('id')->on('estado_brasil');
            $table->unsignedBigInteger('cidadebrasil_id')->nullable();
            $table->foreign('cidadebrasil_id')->references('id')->on('cidade_brasil');
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
        Schema::dropIfExists('fornecedor');
    }
}
