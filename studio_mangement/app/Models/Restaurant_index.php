<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant_index extends Model
{
    use HasFactory;
    public $timestamps = false;    
    protected $table = 'restaurant';
    protected $fillable = 
    [
        'id',
        'name',
        'number',
        'email',
        'address',
        'week_start',
        'week_end',
        'start_time',
        'end_time'
    ];
}
