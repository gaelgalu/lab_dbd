<?php

use Faker\Generator as Faker;
use App\Flight;

$factory->define(Flight::class, function (Faker $faker) {

    return [
    	'price' => rand(100000, 1500000),
    	'startDate' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+2 weeks', $timezone = null),
    	'endDate' => $faker->dateTimeBetween($startDate = '+2 weeks', $endDate = '+4 weeks', $timezone = null),
    	'availability' => (bool)random_int(0, 1),
    ];
});
