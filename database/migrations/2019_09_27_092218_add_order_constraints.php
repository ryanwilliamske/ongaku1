<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOrderConstraints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders',function($table){
            $table->unsignedBigInteger('productId');
            $table->foreign('productId')->
                references('productId')->
                on('catalogues')->
                onDelete('cascade');
        });
    }

    /**
     * Reverse the migrathpions.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders',function($table){
            $table->dropColumn('productId');
        });
    }
}
