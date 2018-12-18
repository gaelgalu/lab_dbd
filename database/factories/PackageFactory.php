<?php

use Faker\Generator as Faker;
use App\Package;

$factory->define(Package::class, function (Faker $faker) {

    return [
    	'price' => rand(300000, 1000000),
    	'name' => $faker->realText($faker->numberBetween(10, 50)),
    	'discount' => (integer)$faker->numberBetween(0, 60),
    	'description' => $faker->realText($faker->numberBetween(10,20)),
    ];
});
