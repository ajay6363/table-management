<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee_role extends Model
{
    use HasFactory;

    public $timestamps = false;    
    protected $table = 'employee_role';
    protected $fillable = 
    [
        'id',
        'role',        
    ];
}
