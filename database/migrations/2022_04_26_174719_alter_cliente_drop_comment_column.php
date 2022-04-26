<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterClienteDropCommentColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Drop column "comentario" because was created a specific table for that
        schema::table('cliente', function(Blueprint $table){
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
        schema::table('cliente', function(Blueprint $table){
            $table->string('comentario')->nullable();
        });
    }
}
