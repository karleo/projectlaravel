<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaymentMode;

class PaymentModeTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        PaymentMode::insert([
            'pay_name' => 'Cash Payment',
            'code' => 'COD',
            'details' => 'Cash Payment',
            "created_at" =>  \Carbon\Carbon::now(),  
            "updated_at" => \Carbon\Carbon::now(), 
        ]);

        PaymentMode::insert([
            'pay_name' => 'Credit Card',
            'code' => 'CC',
            'details' => 'Payment with Credit Card',
            "created_at" =>  \Carbon\Carbon::now(),  
            "updated_at" => \Carbon\Carbon::now(), 
        ]);

        PaymentMode::insert([
            'pay_name' => 'Paypal',
            'code' => 'Paypal',
            'details' => 'Payment with Paypal',
            "created_at" =>  \Carbon\Carbon::now(),  
            "updated_at" => \Carbon\Carbon::now(), 
        ]);

        PaymentMode::insert([
            'pay_name' => 'Wire Transfer',
            'code' => 'Wire Transfer',
            'details' => 'Payment with Wire transfer',
            "created_at" =>  \Carbon\Carbon::now(),  
            "updated_at" => \Carbon\Carbon::now(), 
        ]);
    }
}
