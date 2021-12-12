<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDocument extends Model
{
    use HasFactory;
    protected $table = "employee_documents";

    protected $primaryKey = 'id';

    protected $fillable = [
 
      'employee_id',
      'description',
      'file_path',  
    ];
}
