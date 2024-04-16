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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('model_year', 255)->nullable();
            $table->string('name', 255)->nullable();
            $table->longText('title')->nullable();
            $table->string('color', 255)->nullable()->default('White');
            $table->string('vin', 255)->nullable();
            $table->string('license_plate', 255)->nullable();
            $table->integer('price')->nullable();
            $table->longText('trim')->nullable();
            $table->mediumText('weight')->nullable();
            $table->longText('transmission')->nullable();
            $table->longText('wheels_tires')->nullable();
            $table->integer('status')->default(1);
            $table->integer('userid')->nullable();
            $table->integer('make_id')->nullable();
            $table->integer('model_id')->nullable();
            $table->string('reg_no', 255)->nullable();
            $table->integer('variant_id')->nullable();
            $table->string('provider', 255)->nullable();
            $table->string('cover', 255)->nullable();
            $table->date('expiry_date')->nullable();
            $table->integer('status_in')->nullable();
            $table->integer('rd_status')->nullable();
            $table->date('rd_ex_date')->nullable();
            $table->date('quarter_expiry')->nullable();
            $table->date('fit_ex_date')->nullable();
            $table->string('fit_status', 256)->nullable();
            $table->string('owner_current', 255)->nullable();
            $table->string('absolute', 255)->nullable();
            $table->string('ownership', 255)->nullable();
            $table->integer('engine_id')->nullable();
            $table->string('engine_displacement', 256)->nullable();
            $table->integer('default')->default(0);
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
        Schema::dropIfExists('vehicles');
    }
};
