<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('request_id')->nullable();
            $table->bigInteger('service_subcategory_id')->nullable();
            $table->string('dynamic_id', 256)->nullable();
            $table->bigInteger('amount')->nullable();
            $table->bigInteger('vehicle_id')->nullable();
            $table->bigInteger('delivery_address_id')->nullable();
            $table->string('cartid', 255)->nullable();
            $table->string('payment_method', 255)->nullable();
            $table->bigInteger('card_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('seller_id')->nullable();
            $table->string('transactionid', 255)->nullable();
            $table->string('compare_product_id', 256)->nullable();
            $table->integer('status')->nullable()->default(0)->comment('0 for Pending delivery, 1 for In progress, 2 for on-Hold, 3 For Dispactched, 4 for Delivered');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->longText('delivered_at')->nullable()->comment('if status = 4 then update field with current date ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
