<?php

use Faker\Generator as Faker;
use App\PaymentMethod;

$factory->define(PaymentMethod::class, function (Faker $faker) {
	$reserves = DB::table('reserves')->select('id')->get();
	$typeOfAccounts = ['Cuenta corriente', 'Cuenta vista', 'Crédito'];

    return [
    	'bankAccountNumber' => $faker->bankAccountNumber,
    	'typeOfAccount' => $typeOfAccounts[array_rand($typeOfAccounts)],
    	'bank' => $faker->company,
    	'reserve_id' => $reserves->random()->id
    ];
});
