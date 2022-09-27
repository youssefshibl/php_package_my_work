<?php

namespace BaklySystems\PayMob;

use Shebl\Nexmo\Nexmo;

class PayMobServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('nexmo', function () {
            return new Nexmo;
            
        });
    }
}
