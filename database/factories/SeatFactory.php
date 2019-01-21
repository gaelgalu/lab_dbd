<?php

use Faker\Generator as Faker;
use App\Seat;

$factory->define(Seat::class, function (Faker $faker) {
	$typesOfSeats = ['Economy', 'Premium Economy', 'Premium Business'];
	$flights = DB::table('flights')->select('id')->get();

    return [
    	'seatNumber' => rand(1, 200),
    	'availability' => (bool)random_int(0, 1),
    	'checkIn' => (bool)random_int(0, 1),
    	'type' => $typesOfSeats[array_rand($typesOfSeats)],
    	'flight_id' => $flights->random()->id
    ];
});
