<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSellerPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_seller_prices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('seller_id')->unsigned();
            $table->bigInteger('seller_price')->unsigned();
            $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('cascade');
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
        Schema::dropIfExists('product_seller_prices');
    }
}
