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
        Schema::create('quote_service', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('quote_id')->nullable()->index('quote_id');
            $table->unsignedBigInteger('service_id')->nullable()->index('service_id');
            $table->unsignedBigInteger('service_product_id')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quote_service');
    }
};
