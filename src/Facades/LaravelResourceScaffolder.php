<?php

namespace Besingamkb\LaravelResourceScaffolder\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Besingamkb\LaravelResourceScaffolder\LaravelResourceScaffolder
 */
class LaravelResourceScaffolder extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Besingamkb\LaravelResourceScaffolder\LaravelResourceScaffolder::class;
    }
}
