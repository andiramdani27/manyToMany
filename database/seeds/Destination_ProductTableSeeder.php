<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class Destination_ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1, 10) as $index)
         {
             DB::table('destination_product')->insert([
             'product_id' => rand(1,10),
             'destination_id' => $faker->numberBetween(1, 10),
             'created_at'=> $faker->dateTimeBetween($startDate = '-5 years', $endDate = '-3 years', $timezone = null),
             'updated_at'=> $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null),
             ]);
         }

      

    //     DB::table('destination_product')->insert(array(
    //     array('destination_id' => 1, 'product_id' => 1),
    //     array('destination_id' => 2, 'product_id' => 2),
    //     array('destination_id' => 3, 'product_id' => 1),
    //     array('destination_id' => 3, 'product_id' => 3),
    //     array('destination_id' => 3, 'product_id' => 5)
    // ));
    }
}



//For n:m Relationships, where I need to attach random entries, I use this simple but efficient Seeder code, that only uses real ids:

//     $faker = Faker\Factory::create();

//     $limit = 100;

//     for ($i = 0; $i < $limit; $i++) {
//         $newrow = *Yourmodel*::create ([
//             'email' => $faker->word . rand(0, 9999) . '@test.com' ,
//           ...
//         ]);

//         $ids = $faker->randomElements( \App\YourOtherModel::select('id')->get()->toArray(), rand(1,*3*) );
//         foreach($ids as $id) {
//             $newrow->*your_relationship*()->attach( $id );
//    }