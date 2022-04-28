<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_code',
        'customer_name',
        'address',
        'email',
        'contact',
        'cellphone',
        'zipcode',
        'country_id',
        'city_id',
        'company_name',
        'cust_type',
    ];
    
    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function city(){
        return $this->belongsTo(City::class);
    }
 
    
}
