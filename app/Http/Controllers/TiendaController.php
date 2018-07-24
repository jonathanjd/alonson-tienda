<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class TiendaController extends Controller
{
    //
    public function index()
    {
        # code...
        $categories = Category::all();
        return view('ecommerce.tienda')->with('categories', $categories);
    }
}
