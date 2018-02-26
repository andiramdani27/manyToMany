<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
           
            $table->string('last_name', 250);
            $table->string('first_name', 250);
            $table->string('email')->unique();
            $table->string('phone_number')->unique();

            $table->unsignedInteger('zip')->nullable();
            $table->string('city', 250)->nullable();
            $table->string('street_name', 250)->nullable();
            $table->string('street_number',250)->nullable();
          
            $table->timestamps();

            //$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
