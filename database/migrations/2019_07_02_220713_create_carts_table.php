<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('product_id');//ofcourse product id thakba
            $table->integer('product_quantity')->default(1);//ofcourse product id thakba
            $table->unsignedBigInteger('user_id')->nullable();//register user na hola
            $table->unsignedInteger('order_id')->nullable();
            $table->string('ip_address')->nullable();//register user na hola
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');

           $table->foreign('product_id')
            ->references('id')->on('products')
            ->onDelete('cascade');//products delete hoya gala or respect ar kaj gulao delete hoya jaba
           $table->foreign('order_id')
            ->references('id')->on('orders')
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
        Schema::dropIfExists('carts');
    }
}
