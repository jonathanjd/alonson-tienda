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
    public function login(Request $request)
    {
        # code...
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (auth()->guard('user-ecommerce')->attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('tienda');
        } else {
            \Session::flash('errorAuth', 'Incorrecto email o password.');
            return redirect()->back();
        }
    }
}
