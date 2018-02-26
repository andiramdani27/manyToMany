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
            ProductTableSeeder::class,
            //DestinationTableSeeder::class,
            //Destination_ProductTableSeeder::class,
            CustomersTableSeeder::class,
            OrdersTableSeeder::class,
            AddressesTableSeeder::class
        ]);
    }
}
