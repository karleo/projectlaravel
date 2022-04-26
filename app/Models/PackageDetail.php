<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'couriers_id',
        'tracking',
        'description',
        'quantity',
        'weight',
        'length',
        'width',
        'height',
        'vweight',
        'cweight',        
    ];

    
}
