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
            $table->string('email')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->boolean('firma_aberta');
            $table->boolean('cnh');
            $table->boolean('cpf');
            $table->boolean('rg')->nullable();
            $table->boolean('passaporte')->nullable();
            $table->unsignedBigInteger('estadobrasil_id')->nullable();
            $table->foreign('estadobrasil_id')->references('id')->on('estado_brasil');
            $table->unsignedBigInteger('cidadebrasil_id')->nullable();
            $table->foreign('cidadebrasil_id')->references('id')->on('cidade_brasil');
            $table->unsignedBigInteger('pais_id')->nullable();
            $table->foreign('pais_id')->references('id')->on('pais');
            $table->unsignedBigInteger('cidade_id')->nullable();
            $table->foreign('cidade_id')->references('id')->on('cidade');
            $table->unsignedBigInteger('statuscliente_id')->default(1);
            $table->foreign('statuscliente_id')->references('id')->on('status_cliente');
            $table->text('comentario')->nullable();
            $table->string('rg_file')->nullable();
            $table->string('passaporte_file')->nullable();
            $table->string('cnh_file')->nullable();
            $table->string('endereco_file')->nullable();
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
