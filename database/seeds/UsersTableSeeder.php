<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create(['id'=> 3 ,'username'=>'inutil','email'=>'inutil@gmail.com']);
        factory(App\User::class)->create(['id'=> 4 ,'username'=>'comprador','email'=>'comprador@gmail.com']);
        factory(App\User::class)->create(['id'=> 5 ,'username'=>'guest','email'=>'guest@gmail.com']);
        factory(App\User::class, 3)->create();
    }
}
