<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_details', function (Blueprint $table) {
            $table->integer('order_id');
            $table->string('order_status');
            $table->integer('u_id');
            $table->integer('p_id');
            $table->string('u_name');
            $table->integer('p_price');
            $table->integer('p_discount');
            $table->integer('p_quantity');
            $table->string('p_size');
            $table->string('p_color');
            $table->string('p_code');
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
        Schema::dropIfExists('orders_details');
    }
}
