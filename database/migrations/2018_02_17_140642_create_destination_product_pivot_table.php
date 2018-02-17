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
