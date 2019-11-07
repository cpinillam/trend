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
            $table->bigInteger('product_id')->unsigned()->nullble();
            $table->double('price');
            $table->bigInteger('status_id')->unsigned()->nullable();
            $table->date('creation_date');

           



        });

        Schema::table('orders', function($table){
            $table->foreign('seller_id')->references('id')->on('users');    
            $table->foreign('buyer_id')->references('id')->on('users'); 
            $table->foreign('product_id')->references('id')->on('products'); 
            // $table->foreign('status_id')->references('id')->on('orders_status');     
        });

        $sql  = 'ALTER TABLE `orders` ADD  FOREIGN KEY (`status_id`) REFERENCES `ordersStatus`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT';
        return $sql;
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
