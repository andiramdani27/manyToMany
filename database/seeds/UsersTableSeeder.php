<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\User::class, 10)->create();

        // DB::table('customer_product')->insert([
        //      'customer_id' => $faker->numberBetween(1, 10),
        //      'product_id' => rand(1,10),
        //      'created_at'=> $faker->dateTimeBetween($startDate = '-5 years', $endDate = '-3 years', $timezone = null),
        //      'updated_at'=> $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null),
        //      ]);
        
        $faker = Faker::create();
        foreach(range(1, 10) as $index)
         {
             DB::table('customer_product')->insert([
             //'customer_id' => $faker->numberBetween(1, 10),
             'customer_id' => rand(1, 10),
             'product_id' => rand(1,10),
             'created_at'=> $faker->dateTimeBetween($startDate = '-5 years', $endDate = '-3 years', $timezone = null),
             'updated_at'=> $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null),
             ]);
         }


    }
}
