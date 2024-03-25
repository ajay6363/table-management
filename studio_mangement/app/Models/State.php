<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

     //---------------state--------------------//
     public $timestamps = false;    
     protected $table = 'states';
     protected $fillable = 
     [
         'id',
         'sname',
         'country_id',
         'country_code',
         'fips_code',
         'type',
         'created_at',
         'updated_at',
         'iso2',
         'latitude',
         'longitude',
         'flag',
         'wikiDataId',
     ];
}
