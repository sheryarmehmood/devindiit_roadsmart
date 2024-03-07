<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('subcategory');
            $table->string('service_type');
            $table->decimal('price');
            $table->string('compatible_vehicle')->nullable();
            $table->string('vendor');
            $table->string('seller_id');
            $table->string('brand_name')->nullable();
            $table->string('image')->nullable();
            $table->boolean('status')->default('1')->comment('1 for Active 0 for Inactive ');
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
        Schema::dropIfExists('services');
    }
}
