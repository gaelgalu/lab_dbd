<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
	$typeOfDocuments = ['Pasaporte', 'Cedula de Identidad'];
    return [
    	'country' => $faker->country,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'name' => $faker->firstName,
        'lastName' => $faker->lastName,
        'bornDate' => $faker->dateTimeBetween($startDate = '-80 years', $endDate = '-18 years', $timezone = null),
        'phone' => $faker->tollFreePhoneNumber,
        'documentOriginCountry' => $faker->country,
        'typeOfDocument' => $typeOfDocuments[array_rand($typeOfDocuments)],
        'numberOfDocument' => rand(1111111, 999999999),
        'points' => rand(0, 1500),
        'money' => rand(0, 2000000),
        'remember_token' => str_random(10)

    ];
});
