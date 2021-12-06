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
            $table->string('shipper_email',200)->nullable();
            $table->unsignedInteger('origin_country_id')->nullable();
            $table->unsignedInteger('origin_city_id')->nullable();            
            $table->string('origin_code')->nullable(); 
            $table->string('origin_zipcode')->nullable(); 
            
            $table->string('consignee',255)->nullable();
            $table->string('consignee_addrs',255)->nullable();
            $table->string('consignee_contact',100)->nullable();
            $table->string('consignee_email',100)->nullable();
            $table->unsignedInteger('dest_country_id')->nullable();
            $table->unsignedInteger('dest_city_id')->nullable();
            $table->string('dest_code')->nullable(); 
            $table->string('dest_zipcode')->nullable(); 

            $table->float('total_weight',8,2)->nullable(); 
            $table->float('total_vol_weight',8,2)->nullable(); 
            $table->float('total_charge_weight',8,2)->nullable(); 
            $table->float('custom_value',8,2)->nullable(); 

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
