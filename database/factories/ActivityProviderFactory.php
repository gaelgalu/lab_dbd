<?php

use Faker\Generator as Faker;
use App\ActivityProvider;

$factory->define(ActivityProvider::class, function (Faker $faker) {
	$adresses = DB::table('adresses')->select('id')->get();

    return [
    	'name' => $faker->unique()->company,
    	'email' => $faker->unique()->safeEmail,
    	'phone' => rand(11111111, 99999999),
    	'adresses_id' => $adresses->random()->id
    ];
});
