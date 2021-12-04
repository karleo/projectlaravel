<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',255);
            $table->string('last_name',255);
            $table->string('middle_name',250)->nullable();
            $table->string('address01',255);
            $table->string('address02',255)->nullable();
            $table->integer('gender');
            $table->integer('age');
            $table->date('birth_date');
            $table->date('hire_date');
            $table->integer('active');

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
        Schema::dropIfExists('employees');
    }
}
