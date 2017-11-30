<?php

namespace Myerscode\Avail\Facades;

use Illuminate\Support\Facades\Facade;

class Text extends Facade
{

    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Myerscode\Utilities\Strings\Utility::class;
    }
}
