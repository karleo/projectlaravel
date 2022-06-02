<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = "employees";

    protected $primaryKey = 'id';

    protected $fillable = [
 
      'first_name',
      'last_name',
      'middle_name',
      'address01',
      'address02',
      'gender',
      'age',
      'birth_date',
      'hire_date',
      'active',
      'image',
      'user_id',
         
    ];

}
