<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('p_id');
            $table->integer('cat_id');
            $table->string('p_name')->unique();
            $table->string('p_slug')->unique();
            $table->string('p_description')->nullable();
            $table->string('Specification')->nullable();
            $table->string('p_code')->unique();
            $table->integer('p_price');
            $table->string('p_delivery_time');
            $table->integer('p_delivery_charge');
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
        Schema::dropIfExists('products');
    }
}
