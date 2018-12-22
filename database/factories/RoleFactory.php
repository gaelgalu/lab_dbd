<?php

use Faker\Generator as Faker;
use App\Role;

$factory->define(Role::class, function (Faker $faker) {
	$roles = ['User', 'Admin'];
    return [
        'name' => $roles[array_rand($roles)],
        'description' => $faker->realText($faker->numberBetween(10,20))
    ];
});
