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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('products_title');
            $table->string('products_slug');
            $table->boolean('is_newbuilding');
            $table->string('artikul');
            $table->double('products_price');
            $table->integer('is_new')->default(0);
            $table->integer('onrest')->default(0);
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->boolean('car_parks');
            $table->boolean('garden');
            $table->boolean('pool');
            $table->integer('square');
            $table->integer('plot');
            $table->integer('products_building_type');
            $table->integer('products_district');
            $table->integer('newbuildings_id')->nullable();
            $table->boolean('products_status');
            $table->text('products_desc')->nullable();
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
};
