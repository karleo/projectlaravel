<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouriersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couriers', function (Blueprint $table) {
            $table->id();
            $table->string('tracking',255)->nullable();
            $table->string('reference',255)->nullable();
            $table->string('shipper',255)->nullable();
            $table->string('shipper_addrs',255)->nullable();
            $table->string('shipper_contact',100)->nullable();
            $table->integer('origin_country',100)->nullable();
            $table->integer('origin_city',100)->nullable();
            $table->string('origin_zipcode')->nullable(); 

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
        Schema::dropIfExists('couriers');
    }
}
