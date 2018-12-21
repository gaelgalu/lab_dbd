<?php

use Faker\Generator as Faker;
use App\Airplane;

$factory->define(Airplane::class, function (Faker $faker) {
	$stretches = DB::table('stretches')->select('id')->get();

    return [
        'name' => str_random(30),
        'code' => (string)$faker->unique()->numberBetween(1000, 9999),
        'stretches_id' => $stretches->random()->id
    ];
});
