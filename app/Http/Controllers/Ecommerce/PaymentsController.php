<?php

namespace App\Http\Controllers\Ecommerce;

use App\Car;
use App\Paypal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentsController extends Controller
{
    //
    public function store(Request $request)
    {
        # code...
        $car_id = \Session::get('car_id');
        $car = Car::findOrCreateBySessionID($car_id);

        $paypal = new Paypal($car);
        $paypal->execute($request->paymentId, $request->PayerID);
    }
}
