<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InCar extends Model
{
    //
    protected $connection = 'mysql_ecommerce';

    protected $fillable = ['product_id', 'car_id'];
}
