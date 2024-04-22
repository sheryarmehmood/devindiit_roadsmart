<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceBundleServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_bundle_service', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('service_bundle_id');
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_bundle_id')->references('id')->on('services_bundles');
            $table->foreign('service_id')->references('id')->on('services');
            //$table->foreignId('service_bundle_id')->constrained()->onDelete('cascade');
           // $table->foreignId('service_id')->constrained()->onDelete('cascade');
            //$table->primary(['service_bundle_id', 'service_id'], 'service_bundle_service_primary');
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
        Schema::dropIfExists('service_bundle_service');
    }
}
