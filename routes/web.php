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
    Route::resource('products', 'ProductController');
    Route::resource('categories', 'Ecommerce\CategoryController');
});

