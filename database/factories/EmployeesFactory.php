<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        
        'firstName' => $faker->firstName(),
        'lastName' => $faker->lastName(),
        'company' => $faker->company(),
        'email' => $faker->email(),
        'phone' => $faker->phoneNumber()
        
    ];
});
