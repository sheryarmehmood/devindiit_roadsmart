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
        Schema::table('repair_services_requests', function (Blueprint $table) {
            $table->foreign(['request_id'], 'repair_services_requests_ibfk_1')->references(['id'])->on('requests')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['service_subcat_id'], 'repair_services_requests_ibfk_2')->references(['id'])->on('service_sub_categories')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('repair_services_requests', function (Blueprint $table) {
            $table->dropForeign('repair_services_requests_ibfk_1');
            $table->dropForeign('repair_services_requests_ibfk_2');
        });
    }
};
