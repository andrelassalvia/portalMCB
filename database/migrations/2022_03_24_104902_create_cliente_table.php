<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('telefone');
            $table->string('email');
            $table->date('data_nascimento');
            $table->boolean('firma_aberta');
            $table->boolean('cnh');
            $table->boolean('cpf');
            $table->boolean('rg');
            $table->boolean('passaporte');
            $table->unsignedBigInteger('estadobrasil_id');
            $table->foreign('estadobrasil_id')->references('id')->on('estado_brasil');
            $table->unsignedBigInteger('cidadebrasil_id');
            $table->foreign('cidadebrasil_id')->references('id')->on('cidade_brasil');
            $table->unsignedBigInteger('pais_id');
            $table->foreign('pais_id')->references('id')->on('pais');
            $table->unsignedBigInteger('cidade_id');
            $table->foreign('cidade_id')->references('id')->on('cidade');
            $table->unsignedBigInteger('statuscliente_id');
            $table->foreign('statuscliente_id')->references('id')->on('status_cliente');
            $table->string('rg_file');
            $table->string('passaporte_file');
            $table->string('cnh_file');
            $table->string('endereco_file');
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
        Schema::dropIfExists('cliente');
    }
}
