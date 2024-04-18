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
        Schema::create('service_requests', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('userId')->nullable();
            $table->bigInteger('cat_id')->nullable();
            $table->integer('acceptEstimation')->nullable();
            $table->integer('rejectEstimation')->nullable();
            $table->string('status', 256)->default('pending');
            $table->string('quote_status', 256)->nullable()->default('pending');
            $table->softDeletes()->nullable(false)->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
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
        Schema::dropIfExists('service_requests');
    }
};
