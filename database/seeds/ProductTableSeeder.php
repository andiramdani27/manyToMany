<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Product::class, 10)->create();
        factory(App\Product::class, 10)->create()->each(function ($u) {
            $u->destinations()->save(factory(App\Destination::class)->make());
        });
    }
}
