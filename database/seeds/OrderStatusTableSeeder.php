<?php

use Illuminate\Database\Seeder;

class OrderStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Order_status::class)->create(['id'=> 1 ,'status'=>'Waiting payment Confimation']);
        factory(App\Order_status::class)->create(['id'=> 2 ,'status'=>'Payment Confirmed']);
        factory(App\Order_status::class)->create(['id'=> 3 ,'status'=>'Shipping']);
        factory(App\Order_status::class)->create(['id'=> 4 ,'status'=>'Delivered']);
        factory(App\Order_status::class)->create(['id'=> 5 ,'status'=>'Sale']);

    }
}
