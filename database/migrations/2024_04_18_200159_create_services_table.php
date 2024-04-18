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
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('category');
            $table->foreignId('service_category');
            $table->string('service_name');
            $table->decimal('service_charges');
            $table->longText('service_details');
            $table->foreignId('sellers');
            $table->string('service_location');
            $table->boolean('service_status')->default(true)->comment('1 for Available 0 for Unavailable ');
            $table->timestamps();

            $table->unique(['category', 'service_category', 'sellers'], 'category_subcategory_seller_id_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
};
