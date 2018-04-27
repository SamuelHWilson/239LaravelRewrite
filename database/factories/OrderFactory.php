<?php

use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\Order::class, function (Faker $faker) {
    return [
        'order_date' => Carbon::parse($faker->date),
        'ship_date' => rand(1,3) == 1 ? Carbon::parse($faker->dateTimeBetween('-30 days', 'now')->format('Y-m-d')) : null,
        'discount_percent' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0.00, $max = 50.00),
        'tax_amount' => $faker->randomFloat($nbMaxDecimals = 2, $min = 3.50, $max = 15.00),
        'shipping_cost' => $faker->randomFloat($nbMaxDecimals = 2, $min = 3.50, $max = 15.00)
    ];
});
