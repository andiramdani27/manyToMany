<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinationProductPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('destination_product', function (Blueprint $table) {
            
            // $table->timestamps(); // not required
            // $table->softDeletes(); // not required

            // $table->integer('account_id')->unsigned();
            // $table->foreign('account_id')->references('id')->on('accounts');

            // $table->integer('tag_id')->unsigned()->nullable();
            // $table->foreign('tag_id')->references('id')->on('tags');

            $table->integer('destination_id')->unsigned()->index();
            $table->foreign('destination_id')->references('id')->on('destinations')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('product_id')->unsigned()->index();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');


        });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('destination_product', function (Blueprint $table) {
            //
        });
    }
}
