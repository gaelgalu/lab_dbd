<?php

use Faker\Generator as Faker;
use App\Vehicle;

$factory->define(Vehicle::class, function (Faker $faker) {
	$supplier_id = DB::table('vehicle_suppliers')->select('id')->get();
    $brands = ['Audi', 'Alfa romeo', 'BMW', 'Bugatti', 'Chevrolet', 'Ford', 'Nissan', 'Opel', 'Pagani', 'Peugeot', 'Subaru', 'Tesla', 'Toyota', 'Volvo'];
    $models = ['Modelo1', 'Modelo2', 'Modelo3'];

    return [
        'price' => rand(5000, 15000),
        'date' => $faker->dateTime($max = 'now'),
        'availability' => (bool)random_int(0, 1),
        'capacity' => rand(1,10),
        'patent' =>  str_random(4) . rand(10, 99),
        'brand' => $brands[array_rand($brands)],
        'model' => $models[array_rand($models)],
        'description' => $faker->realText($faker->numberBetween(10,20)),
        
        'vehicle_supplier_id' => $supplier_id->random()->id
    ];
});
