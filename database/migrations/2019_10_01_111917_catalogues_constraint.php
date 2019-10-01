<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CataloguesConstraint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('catalogues',function($table){
            $table->unsignedBigInteger('companyId');
            $table->foreign('companyId')->
                references('companyId')->
                on('companies')->
                onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('catalogues',function($table){
            $table->dropColumn('companyId');

        });
    }
}
