<?php

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'detail' => $faker->paragraph,
        'price' => $faker->numberBetween($min = 10, $max = 9000),
        'stock' => $faker->randomDigit,
        'discount' => $faker->numberBetween($min = 4, $max = 30),
    ];
});
