<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(ARM\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'username' => $faker->userName,
        'type' => $faker->randomElement(['operaciones', 'cobranza']),
        'password' => bcrypt('tecnoweb'),
        'status' => 1
    ];
});

$factory->define(ARM\Customer::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->company,
        'contact' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'type' => $faker->randomElement(['0', '1']),
        'address' => $faker->streetAddress,
        'colonia' => $faker->cityPrefix,
        'municipio' => $faker->city,
        'state' => $faker->state,
        'zipcode' => $faker->postcode,
        'status' => 1
    ];
});

$factory->define(ARM\Seller::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'last_name' =>$faker->lastName,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'key' => $faker->swiftBicNumber,
        'fecha_ingreso' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'status' => 1
    ];
});