<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            //UsersTableSeeder::class,
            //DestinationTableSeeder::class,
           
            //AddressesTableSeeder::class,
            //OrdersTableSeeder::class,
           
            CustomersTableSeeder::class,
            ProductTableSeeder::class,
            //Costumer_ProductTableSeeder::class,
            UsersTableSeeder::class,
        ]);
    }
}
