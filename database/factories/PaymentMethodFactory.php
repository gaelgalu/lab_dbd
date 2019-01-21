<?php

use Faker\Generator as Faker;
use App\PaymentMethod;

$factory->define(PaymentMethod::class, function (Faker $faker) {
	$users = DB::table('users')->select('id')->get();
	$typeOfAccounts = ['Cuenta corriente', 'Cuenta vista', 'Crédito'];

    return [
    	'bankAccountNumber' => $faker->bankAccountNumber,
    	'typeOfAccount' => $typeOfAccounts[array_rand($typeOfAccounts)],
    	'bank' => $faker->company,
    	'user_id' => $users->random()->id
    ];
});
