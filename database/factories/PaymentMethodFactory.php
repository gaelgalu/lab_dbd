<?php

use Faker\Generator as Faker;
use App\PaymentMethod;

$factory->define(PaymentMethod::class, function (Faker $faker) {

    return [
    	'token' => $faker->sha256,
    ];
});
