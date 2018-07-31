<?php

namespace App\Http\Controllers\Ecommerce;

use PDF;
use App\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($customid)
    {
        //
        $car = Car::where('customid', $customid)->first();
        $order = $car->order;
        $data = [
            'numero' => $order->id,
            'fecha' => $order->created_at,
            'status' => $order->status,
            'total' => $order->total,
            'email' => $order->email,
            'line1' => $order->line1,
            'postal_code' => $order->postal_code,
            'city' => $order->city,
            'country_code' => $order->country_code,
            'state' => $order->state,
            'productos' => $car->products
        ];
        $pdf = PDF::loadView('ecommerce.dashboard.client.invoice-pdf', $data);
        return $pdf->download('factura.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
