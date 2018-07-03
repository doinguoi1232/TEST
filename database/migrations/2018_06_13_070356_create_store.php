<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('soluong');
            $table->integer('userd_id')->unsigned();
            $table->integer('products_id')->unsigned();
            $table->foreign('userd_id')->references('id')->on('users')->ondetele('cascade');
            $table->foreign('products_id')->references('id')->on('products')->ondetele('cascade');
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
        //
    }
}
