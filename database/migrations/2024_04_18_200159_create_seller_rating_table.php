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
        Schema::create('seller_rating', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('user_id');
            $table->bigInteger('seller_id');
            $table->float('rating', 10, 0);
            $table->longText('comments')->nullable();
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('created_at')->useCurrent();
            $table->softDeletes()->nullable(false)->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seller_rating');
    }
};
