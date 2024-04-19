<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateServicesTableColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->renameColumn('subcategory', 'service_category');
            $table->string('service_name');
            $table->renameColumn('price', 'service_charges');
            $table->string('service_details');
            $table->string('sellers');
            $table->renameColumn('status', 'service_status');
            $table->string('service_location');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->renameColumn('service_category', 'subcategory');
            $table->dropColumn('service_name');
            $table->renameColumn('service_charges', 'price');
            $table->dropColumn('service_details');
            $table->dropColumn('sellers');
            $table->renameColumn('service_status', 'status');
            $table->dropColumn('service_location');
        });
    }
}
