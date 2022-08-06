<?php

namespace BernskioldMedia\LaravelMatomo\Facades;

use BernskioldMedia\LaravelMatomo\Resources\VisitorInterest;
use BernskioldMedia\LaravelMatomo\Resources\VisitsSummary;
use BernskioldMedia\LaravelMatomo\Resources\VisitTime;
use Illuminate\Support\Facades\Facade;

/**
 * @method static VisitTime visitTime()
 * @method static VisitorInterest visitorInterest()
 * @method static VisitsSummary visitsSummary()
 *
 * @see \BernskioldMedia\LaravelMatomo\Matomo
 */
class Matomo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \BernskioldMedia\LaravelMatomo\Matomo::class;
    }
}
