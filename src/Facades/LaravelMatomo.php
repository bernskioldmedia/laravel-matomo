<?php

namespace BernskioldMedia\LaravelMatomo\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BernskioldMedia\LaravelMatomo\LaravelMatomo
 */
class LaravelMatomo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \BernskioldMedia\LaravelMatomo\LaravelMatomo::class;
    }
}
