<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SchemeCreation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        /*
         * Car table.
         */
        Schema::create('car', function(Blueprint $table){
            $table->increments('id');
            $table->string('brand');
            $table->string('model');
            $table->string('color');
            $table->timestamps();
        });

        /*
         * Product table.
         */
        Schema::create('product', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->integer('price');
            $table->string('brand');
            $table->string('description');
            $table->timestamps();
        });

        /*
         * Products list table.
         */
        Schema::create('products_list', function(Blueprint $table){
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('product_products_list', function(Blueprint $table){
            $table->increments('id');
            $table->integer('products_list_id')->unsigned();
            $table->foreign('products_list_id')->references('id')->on('products_list');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('product');
            $table->timestamps();
        });

        Schema::create('sell', function(Blueprint $table){
            $table->increments('id');
            $table->integer('products_list_id')->unsigned();
            $table->foreign('products_list_id')->references('id')->on('products_list');
            $table->string('client_name');
            $table->string('client_nit');
            $table->integer('total_price');
            $table->timestamps();
        });

        Schema::create('repairs', function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('car_id')->unsigned();
            $table->foreign('car_id')->references('id')->on('car');
            $table->integer('products_list_id')->unsigned();
            $table->foreign('products_list_id')->references('id')->on('products_list');
            $table->string('client_name');
            $table->string('client_nit');
            $table->integer('total_price');
            $table->integer('price');
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
        Schema::drop('repairs');
        Schema::drop('sell');
        Schema::drop('product_products_list');
        Schema::drop('products_list');
        Schema::drop('product');
        Schema::drop('car');
    }
}
