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
        Schema::create('policies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vehicle_id')->nullable();
            $table->integer('request_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('seller_id', 256)->nullable();
            $table->string('policy_number', 256)->nullable();
            $table->string('rate', 256)->nullable();
            $table->string('discount', 256)->nullable();
            $table->string('premium', 256)->nullable();
            $table->string('cover', 256)->nullable();
            $table->date('start_date')->nullable();
            $table->date('expiry_date')->nullable();
            $table->string('status')->nullable()->default('1')->comment('0 for expire, 1 for active');
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
        Schema::dropIfExists('policies');
    }
};
