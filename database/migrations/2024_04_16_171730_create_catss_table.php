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
        Schema::create('catss', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 255);
            $table->longText('icon')->nullable();
            $table->longText('description')->nullable();
            $table->bigInteger('category');
            $table->bigInteger('subcategory');
            $table->bigInteger('service');
            $table->bigInteger('sr_no');
            $table->timestamp('created_at')->useCurrent();
            $table->softDeletes()->nullable(false)->useCurrent();
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
        Schema::dropIfExists('catss');
    }
};
