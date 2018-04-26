<?php

use Faker\Generator as Faker;

$factory->define(App\Order::class, function (Faker $faker) {
    return [
        'order_date' => Carbon::parse($faker->date),
        'ship_date' => Carbon::parse($faker->date),
        'discount_percent' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0.00, $max = 50.00),
        'tax' => $faker->randomFloat($nbMaxDecimals = 2, $min = 3.50, $max = 15.00),
        'shipping' => $faker->randomFloat($nbMaxDecimals = 2, $min = 3.50, $max = 15.00)
    ];
});
