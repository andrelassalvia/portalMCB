<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterOrdemServicoInsertClassificacaoIdColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::table('ordem_servico', function(Blueprint $table){
            $table->unsignedBigInteger('classificacao_id')->after('statusordem_id')->nullable();
            $table->foreign('classificacao_id')->references('id')->on('classificacao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('ordem_servico', function(Blueprint $table){
            $table->dropForeign('ordem_servico_classificacao_id_foreign');
            $table->dropColumn('classificacao_id');            
        });
    }
}
