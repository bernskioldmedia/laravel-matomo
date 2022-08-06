<?php

namespace BernskioldMedia\LaravelMatomo\Resources;

use BernskioldMedia\LaravelMatomo\Concerns\SelectsDate;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsPeriod;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsSites;

class PagePerformance extends BaseResource
{
    use SelectsSites,
        SelectsPeriod,
        SelectsDate;

    public function summary(): object|array
    {
        return $this->get('get');
    }

    protected function moduleName(): string
    {
        return 'PagePerformance';
    }
}
