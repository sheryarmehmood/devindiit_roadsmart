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
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('serviceEstimationId')->nullable();
            $table->string('seller_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('serviceProvidesId')->nullable();
            $table->integer('compare_productid')->nullable();
            $table->string('appointment_Date', 256)->nullable();
            $table->string('appointment_Time', 256)->nullable();
            $table->string('requestid', 256)->nullable();
            $table->integer('status')->default(0)->comment('0 for pending, 1 for cancelled, 2 for booked, 3 for reschedule');
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
        Schema::dropIfExists('appointments');
    }
};
