<?php

namespace App\Http\Controllers\Ecommerce;

use App\Car;
use App\Order;
use App\Paypal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentsController extends Controller
{

    /**
     * Construct
     */
    public function __construct() {
        $this->middleware('auth:user-ecommerce');
    }

    //
    public function store(Request $request)
    {
        # code...
        $car_id = \Session::get('car_id');
        $car = Car::findOrCreateBySessionID($car_id);

        $paypal = new Paypal($car);
        $response = $paypal->execute($request->paymentId, $request->PayerID);

        if ($response->state == "approved") {
            # code...
            \Session::remove('car_id');
            $order = Order::createFromPaypalResponse($response, $car);
            $car->approve();
            return redirect()->route('compra', $car->customid);
        }


    }

    public function send()
    {
        # code...
        $car_id = \Session::get('car_id');
        $car = Car::findOrCreateBySessionID($car_id);

        $paypal = new Paypal($car);
        $payment = $paypal->generate();

        return redirect($payment->getApprovalLink());
    }
}
