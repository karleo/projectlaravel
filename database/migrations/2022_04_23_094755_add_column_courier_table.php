<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnCourierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('couriers', function (Blueprint $table) {
            //
            $table->date('date_ship')->nullable();
            $table->integer('pack_type')->nullable();
            $table->integer('ship_mode')->nullable();
            $table->integer('ship_status')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('couriers', function (Blueprint $table) {
            //
            $table->dropColumn('date_ship');   
            $table->dropColumn('pack_type');   
            $table->dropColumn('ship_mode');   
            $table->dropColumn('ship_status');   
        });
    }
}
