<?php

use Faker\Generator as Faker;
use App\Adress;

$factory->define(Adress::class, function (Faker $faker) {

    return [
    	'country' => $faker->country,
    	'city' => $faker->city,
    	'street' => str_random(25),
    	'number' => rand(1, 1000),
    ];
});
