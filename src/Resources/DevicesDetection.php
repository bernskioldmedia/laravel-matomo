<?php

namespace BernskioldMedia\LaravelMatomo\Resources;

use BernskioldMedia\LaravelMatomo\Concerns\SelectsDate;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsPeriod;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsSites;

class DevicesDetection extends BaseResource
{
    use SelectsDate,
        SelectsPeriod,
        SelectsSites;

    public function types(): object|array
    {
        return $this->get('getType');
    }

    public function brands(): object|array
    {
        return $this->get('getBrand');
    }

    public function models(): object|array
    {
        return $this->get('getModel');
    }

    public function operatingSystems(): object|array
    {
        return $this->get('getOsFamilies');
    }

    public function operatingSystemVersions(): object|array
    {
        return $this->get('getOsVersions');
    }

    public function browsers(): object|array
    {
        return $this->get('getBrowsers');
    }

    public function browserVersions(): object|array
    {
        return $this->get('getBrowserVersions');
    }

    public function browserEngines(): object|array
    {
        return $this->get('getBrowserEngines');
    }

    protected function moduleName(): string
    {
        return 'DevicesDetection';
    }
}
