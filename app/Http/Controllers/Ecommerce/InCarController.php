<?php

namespace App\Http\Controllers\Ecommerce;

use App\Car;
use App\InCar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InCarController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $car_id = \Session::get('car_id');
        $car = Car::findOrCreateBySessionID($car_id);
        $response = InCar::create([
            'car_id' => $car->id,
            'product_id' => $request->product_id
        ]);

        if ($response) {
            # code...
            return redirect()->back();
        } else {
            # code...
            return redirect()->back();
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
