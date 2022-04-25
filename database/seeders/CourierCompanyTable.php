<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourierCompany;

class CourierCompanyTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        CourierCompany::insert([
            'name_com' => 'Prime Logistics FZCO',           
            'address' => 'DAFZA, Duabi',
            'contact' => '+971042990060',
            'website' => 'https://primelogistics.ae/',
            "created_at" =>  \Carbon\Carbon::now(),  
            "updated_at" => \Carbon\Carbon::now(), 
        ]);

        CourierCompany::insert([
            'name_com' => 'ZAJIL',           
            'address' => 'Riyadh , Saudi Arabia',
            'contact' => '8001000177',
            'website' => 'https://zajil-express.com/en/',
            "created_at" =>  \Carbon\Carbon::now(),  
            "updated_at" => \Carbon\Carbon::now(), 
        ]);

        CourierCompany::insert([
            'name_com' => 'ESNAD',           
            'address' => 'Al-Mlqa Commercial Center, Malka District, Anas bin Malik Road,P.O. Box #8292 Riyadh 13521',
            'contact' => '+966920034000',
            'website' => 'https://primelogistics.ae/',
            "created_at" =>  \Carbon\Carbon::now(),  
            "updated_at" => \Carbon\Carbon::now(), 
        ]);
       

    }
}
