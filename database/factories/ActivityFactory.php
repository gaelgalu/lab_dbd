<?php

use Faker\Generator as Faker;
use App\Activity;

$factory->define(Activity::class, function (Faker $faker) {
	$activity_providers = DB::table('activity_providers')->select('id')->get();

    return [
    	'adultPrice' => rand(50000, 300000),
    	'kidPrice' => rand(30000, 200000),
    	'startDate' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+2 weeks', $timezone = null),
    	'endDate' => $faker->dateTimeBetween($startDate = '+2 weeks', $endDate = '+4 weeks', $timezone = null),
    	'name' => str_random(30),
    	'description' => $faker->realText($faker->numberBetween(10,20)),
    	'adultsCapacity' => rand(10, 100),
    	'kidsCapacity' => rand(10, 50),
    	'availability' => (bool)random_int(0, 1),
    	'activity_providers_id' => $activity_providers->random()->id
    ];
});
