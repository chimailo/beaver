<?php

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        'user_id' => function() {
        	return App\User::all()->random();
        },
        'name' => $faker->word,
        'detail' => $faker->paragraph,
        'price' => $faker->numberBetween($min = 10, $max = 3500),
        'stock' => $faker->randomDigit,
        'discount' => $faker->numberBetween($min = 4, $max = 30),
    ];
});
