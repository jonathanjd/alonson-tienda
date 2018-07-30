<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $connection = 'mysql_ecommerce';

    protected $fillable = [
        'car_id',
        'user_id',
        'line1',
        'line2',
        'city',
        'postal_code',
        'country_code',
        'state',
        'recipient_name',
        'email',
        'status',
        'guide_number',
        'total',
    ];

    public function car()
    {
        # code...
        return $this->belongsTo(Car::class);
    }

    public function user()
    {
        # code...
        return $this->belongsTo(User::class);
    }

    public static function createFromPaypalResponse($response, $car)
    {
        # code...
        $payer = $response->payer;
        $orderData = (array)$payer->payer_info->shipping_address;
        $orderData = $orderData[key($orderData)];
        $orderData['email'] = $payer->payer_info->email;
        $orderData['total'] = $car->total();
        $orderData['car_id'] = $car->id;
        $orderData['user_id'] = Auth::guard('user-ecommerce')->user()->id;
        return Order::create($orderData);
    }
}
