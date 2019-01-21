<?php

use Faker\Generator as Faker;
use App\Flight;
use App\Airport;
use App\Adress;

$factory->define(Flight::class, function (Faker $faker) {

	$originAirport = Airport::all()->random();
	$destinyAirport = Airport::all()->random();

    $originCity = Adress::find($originAirport->adress_id)->city;
    $destinyCity = Adress::find($destinyAirport->adress_id)->city;

	while ( $originCity ==  $destinyCity) {
		$destinyAirport = Airport::all()->random();	
        $destinyCity = Adress::find($destinyAirport->adress_id)->city;
	}

    return [
    	'price' => rand(100000, 1500000),
    	'arrivalDate' => $faker->dateTimeBetween($startDate = '+1 weeks', $endDate = '+2 weeks', $timezone = null)->format('d-m-Y'),
    	'arrivalTime' => $faker->time($format = 'H:i', $max = 'now'),
    	'departureDate' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 weeks', $timezone = null)->format('d-m-Y'),
    	'departureTime' => $faker->time($format = 'H:i', $max = 'now'),
    	'availability' => (bool)random_int(0, 1),
    	'origin' => $originAirport->id,
    	'destiny' => $destinyAirport->id,
    	'plane' => str_random(10)
    ];
});
