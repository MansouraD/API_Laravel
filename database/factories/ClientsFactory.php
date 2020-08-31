<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Model;
use App\Clients;
use Faker\Generator as Faker;

$factory->define(Clients::class, function (Faker $faker) {
    return [
 
        'nom' => $faker->name(),
        'prenom' => $faker->name(),
        'date_de_naissance' => $faker->date(),
        'cni' => $faker->numberBetween(1000000,9999999),
        'adresse' => $faker->address(),
        'telephone' => $faker->phoneNumber(),
        'mail' => $faker->email(),
        'profession'=> $faker->jobTitle(),
    ];
    
});
