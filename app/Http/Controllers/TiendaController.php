<?php

namespace App\Http\Controllers;

use App\Car;
use App\Category;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    //
    public function index()
    {
        # code...
        $categories = Category::all();
        return view('ecommerce.tienda')
            ->with('categories', $categories);
    }
}
