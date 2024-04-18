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
        Schema::create('repair_services_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('request_id')->nullable()->index('request_id');
            $table->unsignedBigInteger('service_subcat_id')->index('service_subcat_id');
            $table->bigInteger('user_id');
            $table->integer('acceptEstimation')->nullable();
            $table->integer('rejectEstimation')->nullable();
            $table->string('quote_status', 256)->nullable()->default('pending');
            $table->bigInteger('product_id')->nullable();
            $table->softDeletes()->nullable(false)->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repair_services_requests');
    }
};
