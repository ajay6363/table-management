<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public $timestamps = false;    
    protected $table = 'employee';
    protected $fillable = 
    [
        'id',
        'name',
        'image',
        'gender',
        'role',        
        'email',
        'number',
        'address',
        'pincode',
        'status',

    ];
}
