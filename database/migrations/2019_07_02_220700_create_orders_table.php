<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id')->nullable();//register user na hola
            $table->unsignedInteger('payment_id')->nullable();
            $table->string('ip_address')->nullable();//register user na hola
            $table->string('name');//if log in then we get otherwise he/she provide
            $table->string('email')->nullable();//user have no email then also order
            $table->string('phone_no');//user have atleast to order
            $table->text('shipping_address');//user have  must  to order
            $table->text('message')->nullable();
            
            $table->boolean('is_paid')->default(0);
            $table->boolean('is_completed')->default(0);
            $table->boolean('is_seen_by_admin')->default(0);
            $table->string('transaction_id')->nullable();
            $table->timestamps();
            //must see the book mark in newfolder for documentation 
            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');//user delete all order delete
                  //also can do in district table 19@5.48
                  //22@25.00 DB FK constrain
            $table->foreign('payment_id')
            ->references('id')->on('payments')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
