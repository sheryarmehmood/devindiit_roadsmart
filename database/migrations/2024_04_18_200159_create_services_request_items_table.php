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
        Schema::create('services_request_items', function (Blueprint $table) {
            $table->integer('id', true);
            $table->longText('dynamic_id')->nullable();
            $table->string('quarters', 256)->nullable();
            $table->string('roadtax_amount', 256)->nullable();
            $table->string('sum_insured', 256)->nullable();
            $table->longText('images')->nullable();
            $table->string('brokerId', 256)->nullable();
            $table->integer('request_id')->nullable();
            $table->bigInteger('subCategory')->nullable();
            $table->integer('service_type_id')->nullable();
            $table->integer('vehicle_id')->nullable();
            $table->integer('acceptEstimation')->nullable();
            $table->integer('rejectEstimation')->nullable();
            $table->integer('acceptSellerId')->nullable();
            $table->integer('rejectSellerId')->nullable();
            $table->string('start_Date', 255)->nullable();
            $table->longText('location')->nullable()->comment('utf8mb4_general_ci');
            $table->mediumText('notes')->nullable();
            $table->longText('additional_info')->nullable();
            $table->string('incidentDate', 256)->nullable();
            $table->string('status', 255)->default('pending');
            $table->integer('product_id')->nullable()->comment('For product finance ');
            $table->integer('price')->nullable()->comment('For product finance ');
            $table->integer('down_payment')->nullable()->comment('For product finance ');
            $table->integer('term')->nullable()->comment('For product finance ');
            $table->integer('interest')->nullable()->comment('For product finance ');
            $table->integer('fees')->nullable()->comment('For product finance ');
            $table->integer('monthlyprice')->nullable()->comment('For product finance ');
            $table->integer('product_finance_status')->nullable()->comment('For product finance ');
            $table->integer('compare_productid')->nullable();
            $table->integer('compare_terms')->nullable();
            $table->integer('compare_downpayment')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services_request_items');
    }
};
