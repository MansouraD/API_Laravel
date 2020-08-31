<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comptes;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Comptes::class, function (Faker $faker) {
    return [
        
        'numero_compte' => $faker->bankAccountNumber(),
        'solde' => $faker->randomDigitNotNull(),
    ];
});
