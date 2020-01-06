<?php

namespace JohnnyHuy\TimezoneList\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The TimezoneList facade.
 */
class TimezoneList extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'timezonelist';
    }
}
