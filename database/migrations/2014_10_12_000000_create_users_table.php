<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
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
            $table->string('first_name',20);
            $table->string('last_name',20);
            $table->string('username',40)->unique();
            $table->string('phone_no',40)->unique();
            $table->string('email')->unique();
            $table->boolean('gender')->default(1)->comment('0=Female|1=Male' );
            $table->string('password');
            
            $table->string('street_address');
            $table->unsignedInteger('division_id')->comment('Division table ID');
            $table->unsignedInteger('district_id')->comment('district table ID');

            $table->unsignedTinyInteger('status')->default()->comment('0=inactive|1=active|2=baned');
            $table->string('ip_address')->nullable();
            
            $table->string('avatar')->nullable();
            $table->text('shipping_address')->nullable();


            $table->timestamp('email_verified_at')->nullable();//why use explore may be bitfume also not include in filable
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
        Schema::dropIfExists('users');
    }
}
