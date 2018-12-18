<?php

use Faker\Generator as Faker;
use App\Seat;

$factory->define(Seat::class, function (Faker $faker) {
	$airplanes = DB::table('vehicle_suppliers')->select('id')->get();
	$typesOfSeats = ['Economy', 'Premium Economy', 'Premium Business'];

    return [
    	'seatNumber' => rand(1, 200),
    	'availability' => (bool)random_int(0, 1),
    	'checkIn' => (bool)random_int(0, 1),
    	'type' => $typesOfSeats[array_rand($typesOfSeats)],
    	'airplane_id' => $airplanes->random()->id
    ];
});
