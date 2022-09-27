<?php

namespace Shebl\Facades;

use Illuminate\Support\Facades\Facade;

class NexmoFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'nexmo';
        
    }
}
