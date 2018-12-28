<?php

use Faker\Generator as Faker;
use App\Room;

$factory->define(Room::class, function (Faker $faker) {
	$lodgings = DB::table('lodgings')->select('id')->get();

    return [
    	'price' => rand(15000, 90000),
        'doorNumber' => rand(1, 50),
    	'kidsCapacity' => rand(0, 4),
        'adultsCapacity' => rand(1, 7),
        'type' => rand(1, 5), //What's the meaning of this?
        'description' => $faker->realText($faker->numberBetween(10,20)),
    	'availability' => (bool)random_int(0, 1),
    	'lodging_id' => $lodgings->random()->id
    ];
});
