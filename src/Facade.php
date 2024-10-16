<?php

namespace Yesdevs\ApplicationInsights;

use Illuminate\Support\Facades\Facade as LaravelFacade;

/**
 * @see \Yesdevs\ApplicationInsights\ApplicationInsights
 */
class Facade extends LaravelFacade
{
    protected static function getFacadeAccessor()
    {
        return 'insights';
    }
}
