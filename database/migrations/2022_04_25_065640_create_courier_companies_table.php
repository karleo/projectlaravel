<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourierCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courier_companies', function (Blueprint $table) {
            $table->id();
            $table->string('name_com',255);
            $table->string('address',255);
            $table->string('contact',255)->nullable();
            $table->string('city',255)->nullable();
            $table->string('country',255)->nullable();
            $table->string('website',255)->nullable();
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
        Schema::dropIfExists('courier_companies');
    }
}
