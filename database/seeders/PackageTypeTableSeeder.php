<?php

namespace Database\Seeders;
use App\Models\PackageType;

use Illuminate\Database\Seeder;

class PackageTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        PackageType::insert([
            'name' => 'Pallets',           
            'details' => 'Corrugated boxes simply refer to what is commonly known as: Card',
        ]);

        PackageType::insert([
            'name' => 'Container',            
            'details' => 'Corrugated boxes simply refer to what is commonly known as: Cardboard.Plastic is used in a wide range of products, from spaceships to paper clips.',
        ]);

        PackageType::insert([
            'name' => 'Rigid boxes',          
            'details' => 'A rigid box is made out of highly condensed paperboard that is 4 times thicker than the paperboard used in the construction of a standard folding carton.',
        ]);
    
        

    }
}
