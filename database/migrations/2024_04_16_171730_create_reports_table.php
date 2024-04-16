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
        Schema::create('reports', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->integer('order_id')->nullable()->default(71);
            $table->integer('request_id')->nullable();
            $table->text('vehicle_name')->nullable();
            $table->string('vehicle_year', 256)->nullable();
            $table->string('vehicle_modal', 255)->default('S-Class S550 4Matic');
            $table->string('vehicle_make', 255)->default('Mercedes-Benz');
            $table->string('reg_no', 256)->default('PB 23 R 8444');
            $table->timestamp('order_date')->useCurrent();
            $table->timestamp('report_date')->useCurrent();
            $table->bigInteger('vehicle_id')->nullable();
            $table->longText('report_item')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
};
