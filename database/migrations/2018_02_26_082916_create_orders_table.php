<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //nem jó...!
        //DB::statement('ALTER TABLE orders ADD COLUMN product_id integer[]');
        

        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('customer_id')->index();
            $table->unsignedInteger('product_id')->index();

            $table->unsignedInteger('ordered_quantity')->nullable();

            
            //OR
            //https://stackoverflow.com/questions/32954424/laravel-migration-array-type
            //$table->json('product_id');
            
            //$table->unsignedInteger('quantity');

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
           


            $table->timestamps();
           
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
