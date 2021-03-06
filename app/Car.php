<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    protected $connection = 'mysql_ecommerce';

    protected $fillable = ['status', 'customid'];

    public function inCars()
    {
        # code...
        return $this->hasMany(InCar::class);
    }

    public function products()
    {
        # code...
        return $this->belongsToMany(Product::class, 'in_cars');
    }

    public function order()
    {
        # code...
        return $this->hasOne(Order::class);
    }

    public function productSize()
    {
        # code...
        return $this->products()->count();
    }

    public function total()
    {
        # code...
        return $this->products()->sum('pricing');
    }

    public function approve()
    {
        # code...
        $this->updateCustomIDAndStatus();
    }

    public function gererateCustomId()
    {
        # code...
        return md5("$this->id $this->updated_at");
    }

    public function updateCustomIDAndStatus()
    {
        # code...
        $this->status = "approved";
        $this->customid = $this->gererateCustomId();
        $this->save();
    }

    public static function findOrCreateBySessionID($car_id)
    {
        # code...
        if ($car_id) {
            # code...
            //Buscar el carrito de compra by ID
            return Car::findBySession($car_id);
        } else {
            //Crear un carrito de compra
            return Car::createWithoutSession();
        }
    }

    public static function findBySession($car_id)
    {
        # code...
        return Car::find($car_id);
    }

    public static function createWithoutSession()
    {
        # code...
        return Car::create([
            'status' => 'incompleted'
        ]);
    }

}
