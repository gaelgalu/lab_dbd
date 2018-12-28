<?php

use Faker\Generator as Faker;
use App\VehicleSupplier;

$factory->define(VehicleSupplier::class, function (Faker $faker) {
	$address_id = DB::table('adresses')->select('id')->get();

    return [
        'name' => $faker->unique()->company,
        'email' => preg_replace('/@example\..*/', '@domain.com', $faker->unique()->safeEmail),
        'phoneNumber' => $faker->tollFreePhoneNumber,

        'adress_id' => $address_id->random()->id
    ];
});
