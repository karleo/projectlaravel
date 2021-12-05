<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('customer_code',255);
            $table->string('customer_name',255);
            $table->string('address',255);
            $table->string('contact',255)->nullable();
            $table->string('email',255)->nullable();
            $table->string('cellphone',255)->nullable();
            $table->string('zipcode',255)->nullable();
            $table->unsignedInteger('country_id');
            $table->unsignedInteger('city_id');
            $table->string('company_name',255)->nullable();
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
        Schema::dropIfExists('customers');
    }
}
