<?php

use Faker\Generator as Faker;
use App\VehicleSupplier;

$factory->define(VehicleSupplier::class, function (Faker $faker) {
	$addresses_id = DB::table('adresses')->select('id')->get();

    return [
        'name' => $faker->unique()->company,
        'email' => preg_replace('/@example\..*/', '@domain.com', $faker->unique()->safeEmail),
        'phoneNumber' => rand(11111111, 99999999),

        'adresses_id' => $addresses_id->random()->id
    ];
});
