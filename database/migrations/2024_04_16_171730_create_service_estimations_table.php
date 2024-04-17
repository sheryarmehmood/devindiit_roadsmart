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
        Schema::create('service_estimations', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->integer('service_request_id')->nullable();
            $table->longText('dynamic_id')->nullable();
            $table->longText('estimation_type')->nullable();
            $table->integer('product_id')->nullable()->comment('for compare deals');
            $table->integer('service_item_id')->nullable();
            $table->bigInteger('sellerId')->nullable();
            $table->string('service_provides', 256)->nullable();
            $table->bigInteger('price')->nullable();
            $table->longText('part_name')->nullable();
            $table->string('part_description', 255)->nullable();
            $table->bigInteger('part_price')->nullable();
            $table->integer('number_of_parts')->nullable();
            $table->string('status', 255)->default('pending');
            $table->integer('rejectedRequestId')->nullable();
            $table->integer('acceptEstimation')->nullable();
            $table->boolean('seen')->default(false);
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('created_at')->useCurrent();
            $table->softDeletes()->nullable(false)->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_estimations');
    }
};
