<?php

namespace App\Http\Controllers\Ecommerce;

use App\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    //
    public function index()
    {
        # code...
        $car_id = \Session::get('car_id');
        $car = Car::findOrCreateBySessionID($car_id);

        $products = $car->products()->get();
        $total = $car->total();

        return view('ecommerce.car.index')
            ->with('products', $products)
            ->with('total', $total);
    }
}
