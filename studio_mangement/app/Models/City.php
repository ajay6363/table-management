<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

     //---------------city--------------------//
     public $timestamps = false;    
     protected $table = 'cities';
     protected $fillable = 
     [
         'id',
         'cname',
         'state_id',
         'state_code',
         'country_id',
         'country_code',         
         'created_at',
         'updated_at',         
         'latitude',
         'longitude',
         'flag',
         'wikiDataId',
     ];

}
