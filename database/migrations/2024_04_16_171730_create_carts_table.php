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
        Schema::create('carts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('order_id')->nullable();
            $table->string('vehicle_id', 256)->nullable();
            $table->integer('product_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('start_date', 255)->nullable();
            $table->string('end_date', 255)->nullable();
            $table->string('used_for', 255)->nullable();
            $table->longText('location')->nullable();
            $table->longText('drop_off_location')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent();
            $table->integer('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
};
