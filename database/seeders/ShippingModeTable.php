<?php

namespace Database\Seeders;

use App\Models\ShippingMode;
use Illuminate\Database\Seeder;

class ShippingModeTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ShippingMode::insert([
            'name' => 'Express Services',           
            'details' => 'Express Services',
        ]);
        ShippingMode::insert([
            'name' => 'International Economy',           
            'details' => 'International Economy',
        ]);

    }
}
