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
            $table->BigInteger('product_id')->nullble();
            $table->double('price')->nullable();
            $table->bigInteger('status_id')->unsigned();
            $table->date('creation_date')->nullable();

            // $table->foreign('product_id')->references('id')->on('products');
            // $table->foreign('price')->references('final_price')->on('products');
            
        
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
