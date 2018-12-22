<?php

use Faker\Generator as Faker;
use App\TransferSchedule;

$factory->define(TransferSchedule::class, function (Faker $faker) {
	$transfers = DB::table('transfers')->select('id')->get();

    return [
        'startDate' => $faker->dateTimeBetween($startDate = '+1 day', $endDate = '+2 weeks', $timezone = null),
        'endDate' => $faker->dateTimeBetween($startDate = '+2 weeks', $endDate = '+4 weeks', $timezone = null),
        'transfer_id' => $transfers->random()->id
    ];
});
