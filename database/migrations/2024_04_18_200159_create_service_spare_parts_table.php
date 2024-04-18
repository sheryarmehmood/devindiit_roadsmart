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
        Schema::create('service_spare_parts', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('seller_id');
            $table->bigInteger('services_request_item_id');
            $table->string('part_name', 255);
            $table->string('part_description', 255);
            $table->bigInteger('part_price');
            $table->integer('number_of_parts');
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
        Schema::dropIfExists('service_spare_parts');
    }
};
