<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CatalogueConstraint2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('catalogues',function($table){
            $table->unsignedBigInteger('catid');
            $table->foreign('catid')->
                references('catid')->
                on('ProductCategories')->
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
            $table->dropColumn('catid');
        });
    }
}
