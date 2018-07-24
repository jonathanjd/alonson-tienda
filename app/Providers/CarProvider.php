<?php

namespace App\Providers;

use App\Car;
use Illuminate\Support\ServiceProvider;

class CarProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('*', function ($view) {
            $car_id = \Session::get('car_id');
            $car = Car::findOrCreateBySessionID($car_id);
            \Session::put('car_id', $car->id);

            $view->with('productCount', $car->productSize());
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
