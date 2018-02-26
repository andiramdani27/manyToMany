<?php

use Faker\Generator as Faker;

$factory->define(App\Order::class, function (Faker $faker) {
    return [
        'customer_id' => $faker->numberBetween(1,10),
        'product_id' => $faker->numberBetween(1,10),

        //így nem jók:
        //'customer_id' => $faker->unique()->numberBetween($min=1, $max=10),
        //'product_id' => $faker->unique()->numberBetween($min=1, $max=10),

        'quantity' => $faker->numberBetween(1,20),
        
        'created_at'=> $faker->dateTimeBetween($startDate = '-3 years', $endDate = '-2 years', $timezone = null),
        'updated_at'=> $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
    ];
});
