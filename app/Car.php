<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = 
    ['make',
     'model',
     'year',
    'milleage',
    'description',
    'fueltype',
    'drivetype',
    'engine',
    'price',
    'image1',
    'image2',
    'image3',
    'image4'];
}
