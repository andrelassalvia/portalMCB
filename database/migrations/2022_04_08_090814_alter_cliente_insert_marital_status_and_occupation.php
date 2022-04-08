<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterClienteInsertMaritalStatusAndOccupation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::table('cliente', function(Blueprint $table) {
            $table->unsignedBigInteger('maritalstatus_id')->nullable()->after('data_nascimento');
            $table->foreign('maritalstatus_id')->references('id')->on('marital_status');
            $table->unsignedBigInteger('occupation_id')->nullable()->after('maritalstatus_id');
            $table->foreign('occupation_id')->references('id')->on('occupation');
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
            $table->dropForeign('cliente_maritalstatus_id_foreign');
            $table->dropColumn('maritalstatus_id');
            $table->dropForeign('cliente_occupation_id_foreign');
            $table->dropColumn('occupation_id');
        });
    }
}
