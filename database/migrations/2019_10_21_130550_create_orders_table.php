<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {


            $table->bigIncrements('id');
            $table->bigInteger('seller_id')->unsigned()->nullble();
            $table->bigInteger('buyer_id')->unsigned()->nullble();
            $table->bigInteger('status_id')->unsigned()->nullable();
            $table->unsignedBigInteger('product_id')->nullble();
            $table->double('price')->nullable();
            $table->date('creation_date');

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('price')->references('final_price')->on('products');
            
        
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
