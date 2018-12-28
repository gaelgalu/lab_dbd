<?php

use Faker\Generator as Faker;
use App\ActivityProvider;

$factory->define(ActivityProvider::class, function (Faker $faker) {
	$adresses = DB::table('adresses')->select('id')->get();

    return [
    	'name' => $faker->unique()->company,
    	'email' => $faker->unique()->safeEmail,
    	'phone' => $faker->tollFreePhoneNumber,
    	'adress_id' => $adresses->random()->id
    ];
});
