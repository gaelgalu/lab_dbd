<?php

use Faker\Generator as Faker;
use App\Role;

$factory->define(Role::class, function (Faker $faker) {
	
	$faker = app('Faker');

    return [
        'name' => $faker->unique()->role,
        'description' => $faker->realText($faker->numberBetween(10,20))
    ];
});
