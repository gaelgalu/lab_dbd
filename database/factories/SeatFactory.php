<?php

use Faker\Generator as Faker;
use App\Seat;

$factory->define(Seat::class, function (Faker $faker) {
	$typesOfSeats = [['Economy', rand(20000, 50000)], ['Premium Economy', rand(50000, 200000)], ['Premium Business', rand(200000, 500000)]];
	$flights = DB::table('flights')->select('id')->get();
	$typeOfSeat = array_rand($typesOfSeats);

    return [
    	'seatNumber' => rand(1, 200),
    	'availability' => (bool)random_int(0, 1),
    	'checkIn' => (bool)random_int(0, 1),
    	'type' => $typesOfSeats[$typeOfSeat][0],
    	'price' => $typesOfSeats[$typeOfSeat][1],
    	'flight_id' => $flights->random()->id
    ];
});
