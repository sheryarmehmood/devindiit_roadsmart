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
        Schema::create('sellers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->longText('shop_name')->nullable();
            $table->string('email', 100)->unique();
            $table->string('lat', 255)->nullable();
            $table->string('lng', 255)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('phone_number')->nullable();
            $table->boolean('status')->default(true)->comment('1 for Active 0 for Inactive ');
            $table->string('avatar')->default('default.jpg');
            $table->text('address1')->nullable();
            $table->text('address2')->nullable();
            $table->text('city')->nullable();
            $table->text('country')->nullable();
            $table->text('state')->nullable();
            $table->string('zipcode')->nullable();
            $table->boolean('is_deleted')->default(false)->comment('1 for Deleted 0 for Not Deleted ');
            $table->boolean('convert_estimate')->default(false)->comment('0 for No 1 for Not yes');
            $table->string('parent_id')->default('0');
            $table->text('stored_permissions')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->mediumText('about')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sellers');
    }
};
