<?php

use App\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    $users = User::all();
    return view('welcome')->with('users', $users);
});

Route::group(['prefix' => 'tienda'], function () {
    Route::get('/', 'TiendaController@index')->name('tienda');
    Route::get('carrito', 'Ecommerce\CarController@index')->name('carrito');
    Route::get('payment/store', 'Ecommerce\PaymentsController@store');
    Route::get('payment/send', 'Ecommerce\PaymentsController@send')->name('payment.send');
    Route::resource('products', 'ProductController');
    Route::resource('categories', 'Ecommerce\CategoryController');
    Route::resource('in_cars', 'Ecommerce\InCarController', ['only' => ['store', 'destroy']]);
    //Auth
    Route::get('login', 'Ecommerce\LoginController@showLoginForm')->name('login');
    Route::get('register', 'Ecommerce\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Ecommerce\RegisterController@register');
    Route::post('logout', 'Ecommerce\LoginController@logout')->name('logout');
});
