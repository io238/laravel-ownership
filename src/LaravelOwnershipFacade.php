<?php

namespace Io238\LaravelOwnership;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Io238\LaravelOwnership\LaravelOwnership
 */
class LaravelOwnershipFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-ownership';
    }
}
