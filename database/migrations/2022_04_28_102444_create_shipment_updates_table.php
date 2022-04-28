<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentUpdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipment_updates', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('courier_id');
            $table->unsignedInteger('country_id');
            $table->unsignedInteger('city_id');
            $table->datetime('shipping_date');
            $table->unsignedInteger('status_id');
            $table->string('remarks',255);
            $table->integer('hide');
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
        Schema::dropIfExists('shipment_updates');
    }
}
