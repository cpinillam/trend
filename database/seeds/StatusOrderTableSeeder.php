<?php

use Illuminate\Database\Seeder;

class StatusOrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\StatusOrder::class)->create(['id'=> 1 ,'status'=>'Waiting payment Confimation']);
        factory(App\StatusOrder::class)->create(['id'=> 2 ,'status'=>'Payment Confirmed']);
        factory(App\StatusOrder::class)->create(['id'=> 3 ,'status'=>'Shipping']);
        factory(App\StatusOrder::class)->create(['id'=> 4 ,'status'=>'Delivered']);
        factory(App\StatusOrder::class)->create(['id'=> 5 ,'status'=>'Sale']);
        factory(App\StatusOrder::class)->create(['id'=> 6 ,'status'=>'Canceled']);

    }
}
