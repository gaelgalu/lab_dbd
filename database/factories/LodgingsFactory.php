<?php

use Faker\Generator as Faker;
use App\Lodging;

$factory->define(Lodging::class, function (Faker $faker) {
	$adresses = DB::table('adresses')->select('id')->get();

    return [
    	'name' => $faker->unique()->company,
    	'email' => $faker->unique()->safeEmail,
    	'phoneNumber' => $faker->tollFreePhoneNumber,
    	'evaluation' => rand(1, 5),
    	'numberOfRooms' => rand(10, 50),
    	'description' => $faker->realText($faker->numberBetween(10,20)),
    	'adresses_id' => $adresses->random()->id
    ];
});
