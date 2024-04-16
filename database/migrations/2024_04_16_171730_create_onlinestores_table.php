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
        Schema::create('onlinestores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('domain_name');
            $table->text('website_link');
            $table->string('seller_id');
            $table->boolean('status')->default(true)->comment('1 for Active 0 for Inactive ');
            $table->boolean('is_deleted')->default(false)->comment('1 for Deleted 0 for Not Deleted ');
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
        Schema::dropIfExists('onlinestores');
    }
};
