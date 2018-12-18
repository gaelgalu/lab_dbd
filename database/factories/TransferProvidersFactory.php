<?php

use Faker\Generator as Faker;
use App\TransferProvider;

$factory->define(TransferProvider::class, function (Faker $faker) {

    return [
        'name' => $faker->unique()->company,
        'mail' => $faker->unique()->safeEmail,
        'telephone' => rand(11111111, 99999999)
    ];
});
