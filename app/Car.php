<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['brand', 'model', 'year', 'maxSpeed',
    'isAutomatic', 'engine', 'numberOfDoors'];

    public static function search($term, $take, $skip) {
        return Car::where('brand', 'LIKE',  '%'.$term.'%')->take($take)->skip($skip)->get();
    }
}
