<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
         'product_name' => $faker->unique()->word,
         'price'       => $faker->numberBetween(100,5000),
         'VAT'=> $faker->randomElement($array = array ('5', '18', '27')),

         //'ordered_quantity' => $faker->numberBetween(1,20),

         'created_at'=> $faker->dateTimeBetween($startDate = '-5 years', $endDate = '-3 years', $timezone = null),
         'updated_at'=> $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null),


         //'created_at'=> $faker->dateTime(),
         //'updated_at'=> $faker->dateTime(),

        //'created_at'=> $faker->iso8601($max = 'now'),
        //'updated_at'=> $faker->iso8601($max = 'now')
    ];
});
