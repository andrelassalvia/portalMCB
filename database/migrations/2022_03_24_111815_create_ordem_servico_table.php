<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdemServicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordem_servico', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('cliente');
            $table->unsignedBigInteger('tiposervico_id');
            $table->foreign('tiposervico_id')->references('id')->on('tipo_servico');
            $table->unsignedBigInteger('fornecedor_id');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedor');
            $table->unsignedBigInteger('statusordem_id');
            $table->foreign('statusordem_id')->references('id')->on('status_ordem');
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->float('receita', 8,2);
            $table->float('custo', 8,2);
            $table->float('cotacao', 8,2);
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
        Schema::dropIfExists('ordem_servico');
    }
}
