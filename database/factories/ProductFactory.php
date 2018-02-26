<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
         'productname' => $faker->unique()->word,
         'price'       => $faker->numberBetween(100,5000),
         'VAT'       => $faker->numberBetween(0, 5, 18, 27),

         'created_at'=> $faker->dateTimeBetween($startDate = '-5 years', $endDate = '-3 years', $timezone = null),
         'updated_at'=> $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null),


         //'created_at'=> $faker->dateTime(),
         //'updated_at'=> $faker->dateTime(),

        //'created_at'=> $faker->iso8601($max = 'now'),
        //'updated_at'=> $faker->iso8601($max = 'now')
    ];
});
