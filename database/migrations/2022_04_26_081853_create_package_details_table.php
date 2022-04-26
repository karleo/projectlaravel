<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('couriers_id');
            $table->string('tracking',250);
            $table->string('description',255);
            $table->bigInteger('quantity');
            $table->decimal('weight',8,2);
            $table->bigInteger('length');
            $table->bigInteger('width');
            $table->bigInteger('height');
            $table->decimal('vweight',8,2);
            $table->decimal('cweight',8,2);
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
        Schema::dropIfExists('package_details');
    }
}
