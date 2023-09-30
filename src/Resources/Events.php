<?php

namespace BernskioldMedia\LaravelMatomo\Resources;

use BernskioldMedia\LaravelMatomo\Concerns\SelectsDate;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsPeriod;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsSecondaryDimension;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsSites;

class Events extends BaseResource
{
    use SelectsDate,
        SelectsPeriod,
        SelectsSecondaryDimension,
        SelectsSites;

    public function categories(): object|array
    {
        return $this->get('getCategory');
    }

    public function actions(): object|array
    {
        return $this->get('getAction');
    }

    public function names(): object|array
    {
        return $this->get('getName');
    }

    protected function query(): array
    {
        $query = [];

        if (! empty($this->secondaryDimension)) {
            $query['secondaryDimension'] = $this->secondaryDimension;
            $query['flat'] = $this->flat;
        }

        return $query;
    }

    protected function moduleName(): string
    {
        return 'Events';
    }
}
