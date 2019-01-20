<?php

use Faker\Generator as Faker;
use App\Reserve;

$factory->define(Reserve::class, function (Faker $faker) {
	$users = DB::table('users')->select('id')->get();

    return [
    	'date' => $faker->dateTimeBetween($startDate = '-1 month', $endDate = 'now', $timezone = null),
    	// 'product' => str_random(50),
    	'amount' => rand(1, 5),
    	'completed' => (bool)random_int(0, 1),
    	'price' => rand(50000, 2000000),
    	'user_id' => $users->random()->id
    ];
});
