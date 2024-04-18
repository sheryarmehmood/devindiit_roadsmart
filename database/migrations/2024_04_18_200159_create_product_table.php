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
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name');
            $table->string('vendor');
            $table->string('brand_name')->nullable();
            $table->text('description');
            $table->decimal('purchase_price');
            $table->decimal('sale_price')->nullable();
            $table->string('SKU');
            $table->enum('stock_status', ['instock', 'outofstock']);
            $table->boolean('is_tyre_product')->default(false);
            $table->string('tyre_size')->nullable();
            $table->unsignedInteger('quantity')->default(10);
            $table->string('image')->nullable();
            $table->text('location');
            $table->string('compatible_vehicle')->nullable();
            $table->string('seller_id');
            $table->boolean('is_deleted')->default(false)->comment('1 for Deleted 0 for Not Deleted ');
            $table->boolean('status')->default(true)->comment('1 for Active 0 for Inactive ');
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
        Schema::dropIfExists('product');
    }
};
