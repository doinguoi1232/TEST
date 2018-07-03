<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('orders', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('tenkhachhang');
            $table->integer('tongtien');
            $table->integer('tiendathanhtoan');
            $table->integer('tienchuathanhtoan');
            $table->integer('loinhuan');
            $table->integer('userd_id')->unsigned();
            $table->foreign('userd_id')->references('id')->on('users')->ondetele('cascade');
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
       Schema::dropIfExists('orders');
    }
}
