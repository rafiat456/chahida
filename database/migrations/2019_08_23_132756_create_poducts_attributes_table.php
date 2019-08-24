<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoductsAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poducts_attributes', function (Blueprint $table) {
            $table->integer('p_id');
            $table->string('p_code');
            $table->string('p_size');
            $table->string('p_stock');
            $table->string('p_color');
            $table->integer('p_price');
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
        Schema::dropIfExists('poducts_attributes');
    }
}
