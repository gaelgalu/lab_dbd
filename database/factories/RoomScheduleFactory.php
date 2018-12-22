<?php

use Faker\Generator as Faker;
use App\RoomSchedule;

$factory->define(RoomSchedule::class, function (Faker $faker) {
	$rooms = DB::table('rooms')->select('id')->get();

    return [
        'startDate' => $faker->dateTimeBetween($startDate = '+1 day', $endDate = '+2 weeks', $timezone = null),
        'endDate' => $faker->dateTimeBetween($startDate = '+2 weeks', $endDate = '+4 weeks', $timezone = null),
        'room_id' => $rooms->random()->id
    ];
});
