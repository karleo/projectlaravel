<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDocTemp extends Model
{
    use HasFactory;
    protected $table = "employee_docs_temp";

    protected $primaryKey = 'id';

    protected $fillable = [ 
      'employee_id',
      'description',
      'file_path',  
    ];
}
