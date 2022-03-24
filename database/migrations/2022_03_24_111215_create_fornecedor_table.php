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
            $table->string('nome');
            $table->string('nome_contato');
            $table->string('telefone');
            $table->string('email');
            $table->string('zap');
            $table->unsignedBigInteger('estadobrasil_id');
            $table->foreign('estadobrasil_id')->references('id')->on('estado_brasil');
            $table->unsignedBigInteger('cidadebrasil_id');
            $table->foreign('cidadebrasil_id')->references('id')->on('cidade_brasil');
            $table->unsignedBigInteger('classificacao_id');
            $table->foreign('classificacao_id')->references('id')->on('classificacao');
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
