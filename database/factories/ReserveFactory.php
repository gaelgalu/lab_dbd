<?php

use Faker\Generator as Faker;
use App\Reserve;

$factory->define(Reserve::class, function (Faker $faker) {
	$users = DB::table('users')->select('id')->get();
	$payment_methods = DB::table('payment_methods')->select('id')->get();

    return [
    	'date' => $faker->dateTimeBetween($startDate = '-1 month', $endDate = 'now', $timezone = null),
    	// 'product' => str_random(50),
        'roomStartDate' => $faker->dateTimeBetween($startDate = '+1 weeks', $endDate = '+2 weeks', $timezone = null)->format('d-m-Y'),
        'roomEnddate' => $faker->dateTimeBetween($startDate = '+2 weeks', $endDate = '+3 weeks', $timezone = null)->format('d-m-Y'),
        'vehicleStartdDate' => $faker->dateTimeBetween($startDate = '+1 weeks', $endDate = '+2 weeks', $timezone = null)->format('d-m-Y'),
        'vehicleEndDate' => $faker->dateTimeBetween($startDate = '+2 weeks', $endDate = '+3 weeks', $timezone = null)->format('d-m-Y'),
        'activityStartDate' => $faker->dateTimeBetween($startDate = '+1 weeks', $endDate = '+2 weeks', $timezone = null)->format('d-m-Y'),
        'activityEndDate' => $faker->dateTimeBetween($startDate = '+2 weeks', $endDate = '+3 weeks', $timezone = null)->format('d-m-Y'),
        'transferStartDate' => $faker->dateTimeBetween($startDate = '+1 weeks', $endDate = '+2 weeks', $timezone = null)->format('d-m-Y'),
        'transferEndDate' => $faker->dateTimeBetween($startDate = '+2 weeks', $endDate = '+3 weeks', $timezone = null)->format('d-m-Y'),
    	'amount' => rand(1, 5),
    	'completed' => (bool)random_int(0, 1),
    	'price' => rand(50000, 2000000),
    	'user_id' => $users->random()->id,
    	'payment_method_id' => $payment_methods->random()->id
    ];
});
