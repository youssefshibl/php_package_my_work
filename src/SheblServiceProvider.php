<?php

namespace Shebl;

use Illuminate\Support\ServiceProvider;
use Shebl\Nexmo\Nexmo;

class SheblServiceProvider extends ServiceProvider
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
        //test
    }
}

// "shebl/handlemywork": "dev-main"
