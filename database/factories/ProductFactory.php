<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence($nbWords = 3),
        'desc' => $faker->text,
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1.00, $max = 3000.00)
    ];
});
