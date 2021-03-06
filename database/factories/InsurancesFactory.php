<?php

use Faker\Generator as Faker;
use App\Insurance;

$factory->define(Insurance::class, function (Faker $faker) {
	$flights = DB::table('flights')->select('id')->get();

    return [
    	'price' => rand(100000, 300000),
    	'description' => $faker->realText($faker->numberBetween(10,20)),
    	'availability' => (bool)random_int(0, 1),
    	'flight_id' => $flights->random()->id
    ];
});
