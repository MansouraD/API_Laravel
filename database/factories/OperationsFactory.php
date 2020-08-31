<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Operations;
use Faker\Generator as Faker;

$factory->define(Operations::class, function (Faker $faker) {
    return [
        'montant' => $faker->numberBetween(1000000,9999999),
    ];
});
