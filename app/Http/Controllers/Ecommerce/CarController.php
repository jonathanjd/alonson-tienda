<?php

namespace App\Http\Controllers\Ecommerce;

use App\Car;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Paypal;

class CarController extends Controller
{
    //
    public function index()
    {
        # code...
        $car_id = \Session::get('car_id');
        $car = Car::findOrCreateBySessionID($car_id);

        $paypal = new Paypal($car);
        $payment = $paypal->generate();

        return redirect($payment->getApprovalLink());

        //$products = $car->products()->get();
        //$total = $car->total();
        //$categories = Category::all();
        //return view('ecommerce.car.index')
        //    ->with('products', $products)
        //    ->with('total', $total)
        //    ->with('categories', $categories);
    }
}
