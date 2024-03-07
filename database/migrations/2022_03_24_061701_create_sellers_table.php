<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email',100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone_number')->nullable();
            $table->boolean('status')->default('1')->comment('1 for Active 0 for Inactive ');
            $table->string('avatar')->default('default.jpg');
            $table->text('address1')->nullable();
            $table->text('address2')->nullable();
            $table->text('city')->nullable();
            $table->text('country')->nullable();
            $table->text('state')->nullable();
            $table->string('zipcode')->nullable();
            $table->boolean('is_deleted')->default('0')->comment('1 for Deleted 0 for Not Deleted ');
            $table->boolean('convert_estimate')->default('0')->comment('0 for No 1 for Not yes');
            $table->string('parent_id')->default('0');
            $table->text('stored_permissions')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('sellers');
    }
}
