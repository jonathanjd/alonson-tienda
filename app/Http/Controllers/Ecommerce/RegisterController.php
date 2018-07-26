<?php

namespace App\Http\Controllers\Ecommerce;

use App\Category;
use App\UserEcommerce;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    //
    public function showRegistrationForm()
    {
        # code...
        $categories = Category::all();
        return view('ecommerce.auth.register')->with('categories', $categories);
    }

    public function register(Request $request)
    {
        # code...

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:mysql_ecommerce.users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = new UserEcommerce();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->type = 'client';
        $user->save();

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (auth()->guard('user-ecommerce')->attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('tienda');
        } else {
            return redirect()->back();
        }

    }
}
