<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPaymentsConst extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders',function($table){
            $table->unsignedBigInteger('paymentTypeId');
            $table->foreign('paymentTypeId')->
                references('paymentTypeId')->
                on('payment_types')->
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
        Schema::table('orders',function($table){
            $table->dropColumn('paymentTypeId');

        });
    }
}
