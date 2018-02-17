<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
         'name' => $faker->unique()->word,

         'created_at'=> $faker->dateTimeBetween($startDate = '-5 years', $endDate = '-3 years', $timezone = null),
         'updated_at'=> $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null),


         //'created_at'=> $faker->dateTime(),
         //'updated_at'=> $faker->dateTime(),

        //'created_at'=> $faker->iso8601($max = 'now'),
        //'updated_at'=> $faker->iso8601($max = 'now')
    ];
});
