<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        
        'first_name' => $faker->firstname,
        'last_name' => $faker->lastname,      
        'email' => $faker->unique()->safeEmail,
        'phone_number' => $faker->unique()->phonenumber,
        
        'zip'=> $faker->numberBetween($min = 1000, $max = 9999),
        'city'=> $faker->smallerCity,
        'street_name' => $faker->streetName,
        'street_number' => $faker->buildingNumber, //numberBetween($min = 1, $max = 200),

        'created_at'=> $faker->dateTimeBetween($startDate = '-5 years', $endDate = '-3 years', $timezone = null),
        'updated_at'=> $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null),
    ];
});
