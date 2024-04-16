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
        Schema::table('quote_service', function (Blueprint $table) {
            $table->foreign(['quote_id'], 'quote_service_ibfk_1')->references(['id'])->on('quotes')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['service_id'], 'quote_service_ibfk_2')->references(['id'])->on('services_previous')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quote_service', function (Blueprint $table) {
            $table->dropForeign('quote_service_ibfk_1');
            $table->dropForeign('quote_service_ibfk_2');
        });
    }
};
