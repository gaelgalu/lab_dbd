<?php

use Faker\Generator as Faker;
use App\TransferProvider;

$factory->define(TransferProvider::class, function (Faker $faker) {
	$adresses = DB::table('adresses')->select('id')->get();
	
    return [
        'name' => $faker->unique()->company,
        'telephone' => $faker->tollFreePhoneNumber,
        'mail' => $faker->unique()->safeEmail,
        'adresses_id' => $adresses->random()->id
    ];
});
