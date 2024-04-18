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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('catid')->nullable();
            $table->string('product_name');
            $table->integer('make')->nullable();
            $table->string('variant', 256)->nullable();
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
            $table->string('year', 255)->nullable();
            $table->string('discount')->nullable()->comment('% value');
            $table->string('seller_id');
            $table->boolean('is_deleted')->default(false)->comment('1 for Deleted 0 for Not Deleted ');
            $table->boolean('status')->default(true)->comment('1 for Active 0 for Inactive ');
            $table->timestamps();
            $table->integer('subcatid')->nullable();
            $table->longText('images')->nullable();
            $table->string('interior_color', 255)->nullable();
            $table->string('exterior_color', 255)->nullable();
            $table->string('engine', 255)->nullable();
            $table->string('engine_displacement', 256)->nullable();
            $table->string('seats', 256)->nullable();
            $table->string('fuel_type', 255)->nullable();
            $table->string('condition', 255)->nullable();
            $table->string('transmission', 255)->nullable();
            $table->string('vin', 255)->nullable();
            $table->string('stock_number', 255)->nullable();
            $table->string('milege', 255)->nullable();
            $table->longText('meter_reading')->nullable();
            $table->string('body_type', 255)->nullable();
            $table->string('engine_type', 255)->nullable();
            $table->integer('brand_id')->nullable();
            $table->integer('views')->nullable()->default(0);
            $table->integer('popular')->nullable()->default(0);
            $table->integer('featured')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
