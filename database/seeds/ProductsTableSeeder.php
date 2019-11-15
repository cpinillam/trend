<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Products::class, 5)->create(['user_id'=> 3]);
        factory(App\Products::class, 3)->create(['user_id'=> 4]);
    }
}