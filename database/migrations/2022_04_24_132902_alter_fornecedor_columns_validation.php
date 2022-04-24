<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedorColumnsValidation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fornecedor', function(Blueprint $table){
            $table->string('nome_contato')->nullable()->change();
            $table->string('telefone')->nullable()->change();
            $table->string('email')->nullable()->change();
            $table->string('zap')->nullable()->change();
            $table->unsignedBigInteger('estadobrasil_id')->nullable()->change();
            $table->unsignedBigInteger('cidadebrasil_id')->nullable()->change();
            $table->unsignedBigInteger('classificacao_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
