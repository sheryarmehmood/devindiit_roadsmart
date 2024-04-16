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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email', 100)->nullable()->unique();
            $table->string('phone_num')->nullable();
            $table->string('image', 255)->nullable();
            $table->boolean('notification_status')->default(true)->comment('1 for Active 0 for Inactive ');
            $table->string('username', 255)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->enum('status', ['0', '1', '2'])->default('0');
            $table->timestamps();
            $table->string('forgot_pass_otp', 255)->nullable();
            $table->string('social_id', 255)->nullable();
            $table->string('fcm_token', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
