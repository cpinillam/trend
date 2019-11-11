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
        factory(App\User::class, 5)->create();
    }
}
