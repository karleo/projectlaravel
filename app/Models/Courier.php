<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'tracking',
        'reference',
        'shipper',
        'shipper_addrs',
        'shipper_contact',
        'shipper_email',
        'origin_country_id',
        'origin_city_id', 
        'origin_code',
        'origin_zipcode',
        'consignee',
        'consignee_addrs',
        'consignee_contact',
        'consignee_email',
        'dest_country_id',
        'dest_city_id',
        'dest_code',
        'dest_zipcode',
        'total_weight',
        'total_vol_weight',
        'total_charge_weight',
        'custom_value', 
        'date_ship',
        'pack_type',
        'ship_mode',
        'ship_status',

    ];

    public function sender(){
        return $this->belongsTo(Customer::class, 'shipper' , 'id');
    }

    public function receiver(){
        return $this->belongsTo(Customer::class, 'consignee' , 'id');
    }

    public function city(){
        return $this->belongsTo(City::class,  'origin_city_id','id');
    }

    public function country(){
        return $this->belongsTo(Country::class,  'origin_country_id','id');
    }

    public function dest_country(){
        return $this->belongsTo(Country::class,  'dest_country_id','id');
    }

    public function dest_city(){
        return $this->belongsTo(City::class,  'dest_city_id','id');
    }

    public function pack(){
        return $this->belongsTo(PackageDetail::class, 'id', 'couriers_id');
    }

 
}
