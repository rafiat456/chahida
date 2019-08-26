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
            $table->string('p_size_1');
            $table->string('p_size_2');
            $table->string('p_size_3');
            $table->string('p_stock');
            $table->string('p_color_1');
            $table->string('p_color_2');
            $table->string('p_color_3');
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
