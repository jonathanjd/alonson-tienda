<?php

namespace App\Http\Controllers\Ecommerce;

use App\Car;
use App\Order;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashBoardController extends Controller
{
    /**
     * Construct
     */
    public function __construct() {
        $this->middleware('auth:user-ecommerce');
    }

    //
    public function index()
    {
        # code...
        $categories = Category::all();
        return view('ecommerce.dashboard.client.index')
            ->with('categories', $categories);
    }

    public function misCompras()
    {
        # code...
        $categories = Category::all();
        return view('ecommerce.dashboard.client.mis-compras')
            ->with('categories', $categories);
    }

    public function compra($customid)
    {
        # code...
        $categories = Category::all();
        $car = Car::where('customid', $customid)->first();
        $order = $car->order;
        return view('ecommerce.dashboard.client.compra')
            ->with('categories', $categories)
            ->with('car', $car)
            ->with('order', $order);
    }
}
