<?php

namespace BernskioldMedia\LaravelMatomo\Resources;

use BernskioldMedia\LaravelMatomo\Concerns\SelectsDate;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsPeriod;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsSites;

class Contents extends BaseResource
{
    use SelectsSites,
        SelectsPeriod,
        SelectsDate;

    public function names(): object|array
    {
        return $this->get('getContentNames');
    }

    public function pieces(): object|array
    {
        return $this->get('getContentPieces');
    }

    protected function moduleName(): string
    {
        return 'Contents';
    }
}
