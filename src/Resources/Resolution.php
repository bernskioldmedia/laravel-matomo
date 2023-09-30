<?php

namespace BernskioldMedia\LaravelMatomo\Resources;

use BernskioldMedia\LaravelMatomo\Concerns\SelectsDate;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsPeriod;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsSites;

class Resolution extends BaseResource
{
    use SelectsDate,
        SelectsPeriod,
        SelectsSites;

    public function resolution(): object|array
    {
        return $this->get('getResolution');
    }

    public function configuration(): object|array
    {
        return $this->get('getConfiguration');
    }

    protected function moduleName(): string
    {
        return 'Resolution';
    }
}
