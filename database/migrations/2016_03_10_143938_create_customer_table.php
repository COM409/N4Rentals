<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('custFirstName');
            $table->string('custLastName');
//            $table->string('DOB');
//            $table->string('email');
//            $table->string('tel');
//            $table->string('uname');
//            $table->string('pword');
//            $table->string('address');
//            $table->string('town');
//            $table->string('county');
//            $table->string('pcode');
//            $table->string('country');
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
        Schema::drop('customer');
    }
}
