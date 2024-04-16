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
        Schema::create('road_tax', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vehicle_id');
            $table->string('seller_id', 256)->nullable();
            $table->integer('request_id')->nullable();
            $table->longText('note')->nullable();
            $table->string('user_id', 256)->nullable();
            $table->string('amount', 256)->nullable();
            $table->date('quarter_expiry')->nullable();
            $table->string('status')->nullable();
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('road_tax');
    }
};
