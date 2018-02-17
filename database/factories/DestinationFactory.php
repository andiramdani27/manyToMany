<?php

use Faker\Generator as Faker;

$factory->define(App\Destination::class, function (Faker $faker) {
    return [
        /* így +10 productot készít
        'product_id' => function () {
                return factory(App\Product::class)->create()->id;
            },
        */    
        'product_id' => $faker->numberBetween($min = 1, $max = 10), 
        'destination' => $faker->address,
        'target_person' => $faker->name,
        'quantity'=> $faker->numberBetween($min = 1, $max = 5),

        'created_at'=> $faker->dateTimeBetween($startDate = '-5 years', $endDate = '-3 years', $timezone = null),
        'updated_at'=> $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null)

        //nemjó
        //'created_at'=> $faker->iso8601($max = 'now'),
        //'updated_at'=> $faker->iso8601($max = 'now')
    ];
});
