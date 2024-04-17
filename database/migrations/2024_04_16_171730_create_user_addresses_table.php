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
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('user_id')->nullable();
            $table->longText('title')->nullable();
            $table->longText('address')->nullable();
            $table->string('city', 255)->nullable();
            $table->string('state', 255)->nullable();
            $table->string('country', 256)->nullable();
            $table->string('zip_code', 255);
            $table->boolean('status')->nullable()->default(false)->comment('for default = 1');
            $table->softDeletes()->nullable(false)->useCurrent();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_addresses');
    }
};
