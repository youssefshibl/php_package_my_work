<?php

namespace Shebl\Facades;

use Illuminate\Support\Facades\Facade;

/**

 * @method static bool SmsMessage($from, $text, $to, $api_key, $api_secret)

 */
class Nexmo extends Facade
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
