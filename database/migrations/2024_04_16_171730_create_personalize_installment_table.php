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
        Schema::create('personalize_installment', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('product_id')->nullable();
            $table->integer('seller_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('down_payment', 255)->nullable();
            $table->string('term', 255)->nullable();
            $table->string('interest_rate', 255)->nullable();
            $table->string('fees', 255)->nullable();
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
        Schema::dropIfExists('personalize_installment');
    }
};
