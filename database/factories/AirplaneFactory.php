<?php

use Faker\Generator as Faker;
use App\Airplane;

$factory->define(Airplane::class, function (Faker $faker) {
	$flights = DB::table('flights')->select('id')->get();

    return [
        'name' => str_random(30),
        'code' => (string)$faker->unique()->numberBetween(1000, 9999),
        'flight_id' => $flights->random()->id
    ];
});
