<?php

namespace Webaction\Admiko\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Webaction\Admiko\Admiko
 */
class Admiko extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'admiko-laravel';
    }
}
