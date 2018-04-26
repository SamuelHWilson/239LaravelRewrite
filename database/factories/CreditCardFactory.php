<?php

use Faker\Generator as Faker;

$factory->define(App\CreditCard::class, function (Faker $faker) {
    return [
        'number' => $faker->creditCardNumber
    ];
});
