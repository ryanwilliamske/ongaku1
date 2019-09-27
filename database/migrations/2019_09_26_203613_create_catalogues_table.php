<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCataloguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogues', function (Blueprint $table) {
            $table->bigIncrements('productId');
            $table->string('productName');
            $table->smallInteger('productPrice');
            $table->longText('prodDescription');
            $table->unsignedBigInteger('companyId');
            $table->foreign('companyId')->references('companyId')->
                on('companies')->
                onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalogues');
    }
}
