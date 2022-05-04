<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedorClassificacaoIdDropColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::table('fornecedor', function(Blueprint $table){
            $table->dropForeign('fornecedor_classificacao_id_foreign');
            $table->dropColumn('classificacao_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('cliente', function(Blueprint $table){
            $table->unsignedBigInteger('classificacao_id')->nullable()->after('cidadebrasil_id');
            $table->foreign('classificacao_id')->references('id')->on('classificacao');
        });
    }
}
