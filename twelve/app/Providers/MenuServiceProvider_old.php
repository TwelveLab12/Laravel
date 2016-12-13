<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use app\Helpers\MenuShip;

class MenuServiceProvider extends ServiceProvider
{
    
    protected $defer = true;
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('App\Helpers\Contracts\MenuShipContract', function(){

            dd(new MenuShip());
            return new MenuShip();

        });
    }
}
