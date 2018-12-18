<?php

use Faker\Generator as Faker;
use App\Stretch;

$factory->define(Stretch::class, function (Faker $faker) {

    return [
    	'origin' => $faker->city,
    	'destiny' => $faker->city,
    	'airline' => $faker->unique()->company,
    	'airplane' => (integer)rand(1, 1000), //Must be the foreign key from airplane table?
    	'platform' => (integer)rand(1, 10),
    	'riseTime' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+2 weeks', $timezone = null)
    ];
});
