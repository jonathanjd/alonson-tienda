<?php

namespace App\Http\Controllers\Ecommerce;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function showLoginForm()
    {
        # code...
        $categories = Category::all();
        return view('ecommerce.auth.login')->with('categories', $categories);
    }

    public function logout(Request $request)
    {
        Auth::guard('user-ecommerce')->logout();

        $request->session()->invalidate();

        return redirect()->route('login');
    }
}
