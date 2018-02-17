<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
         //'name' => $faker->unique()->word,

         //'updated_at'=> $faker->NOW(),
        //'created_at'=> $faker->iso8601($max = 'now'),
        //'updated_at'=> $faker->iso8601($max = 'now')
    ];
});
