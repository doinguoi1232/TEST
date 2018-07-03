<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('alias');
            $table->integer('price');
            $table->string('keywrod');
            $table->string('soluong');
            $table->string('quycach');
            $table->string('donvitinh');
            $table->string('giaban');
            $table->string('ghichu');
            $table->string('description');
            $table->integer('userd_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('providers_id')->unsigned();
            $table->foreign('userd_id')->references('id')->on('users')->ondetele('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->ondetele('cascade');
            $table->foreign('providers_id')->references('id')->on('provider')->ondetele('cascade');
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
