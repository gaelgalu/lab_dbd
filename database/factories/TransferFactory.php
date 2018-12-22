<?php

use Faker\Generator as Faker;
use App\Transfer;

$factory->define(Transfer::class, function (Faker $faker) {
	$transfer_providers = DB::table('transfer_providers')->select('id')->get();
    $brands = ['Audi', 'Alfa romeo', 'BMW', 'Bugatti', 'Chevrolet', 'Ford', 'Nissan', 'Opel', 'Pagani', 'Peugeot', 'Subaru', 'Tesla', 'Toyota', 'Volvo'];
    $models = ['Modelo1', 'Modelo2', 'Modelo3'];

    return [
        'price' => rand(15000, 90000),
        'capacity' => rand(1, 7),
        'description' => $faker->realText($faker->numberBetween(10,20)),
        'brand' => $brands[array_rand($brands)],
        'model' => $models[array_rand($models)],
        'type' => rand(1, 5), //What's the meaning of this?
        'availability' => (bool)random_int(0, 1),
        'transferProvider_id' => $transfer_providers->random()->id
    ];
});
