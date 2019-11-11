<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Products;
use Faker\Generator as Faker;

$factory->define(Products::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'initial_price' => random_int(1, 50),
        'user_id' => 3,
    ];
});
