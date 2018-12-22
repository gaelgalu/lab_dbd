<?php

use Faker\Generator as Faker;
use App\VehicleSchedule;

$factory->define(VehicleSchedule::class, function (Faker $faker) {
	$vehicle = DB::table('vehicles')->select('id')->get();

    return [
        'startDate' => $faker->dateTimeBetween($startDate = '+1 day', $endDate = '+2 weeks', $timezone = null),
        'endDate' => $faker->dateTimeBetween($startDate = '+2 weeks', $endDate = '+4 weeks', $timezone = null),
        'vehicle_id' => $vehicle->random()->id
    ];
});
