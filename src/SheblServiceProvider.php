<?php

namespace Shebl;

use Shebl\Nexmo\Nexmo;

class SheblServiceProvider
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
