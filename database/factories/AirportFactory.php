<?php

use Faker\Generator as Faker;
use App\Airport;

$factory->define(Airport::class, function (Faker $faker) {
	$adresses = DB::table('adresses')->select('id')->get();

    return [
    	'name' => $faker->unique()->company,
    	'telephone' => $faker->tollFreePhoneNumber,
    	'mail' => $faker->unique()->safeEmail,
    	'adress_id' => $adresses->random()->id
    ];
});
