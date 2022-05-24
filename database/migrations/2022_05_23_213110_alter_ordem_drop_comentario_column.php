<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterOrdemDropComentarioColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::table('ordem_servico', function(Blueprint $table){
            $table->dropColumn('comentario');
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
            $table->text('comentario')->nullable()->after('cotacao');
        });
    }
}
