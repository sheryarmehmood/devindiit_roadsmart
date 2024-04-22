<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceBundleSubserviceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_bundle_subservice', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('service_bundle_id');
            $table->unsignedBigInteger('sub_service_id');
            $table->foreign('service_bundle_id')->references('id')->on('services_bundles');
            $table->foreign('sub_service_id')->references('id')->on('sub_services');
           // $table->foreignId('service_bundle_id')->constrained()->onDelete('cascade');
          //  $table->foreignId('sub_service_id')->constrained()->onDelete('cascade');
            //$table->primary(['service_bundle_id', 'sub_service_id'], 'service_bundle_subservice_primary');
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
        Schema::dropIfExists('service_bundle_subservice');
    }
}
