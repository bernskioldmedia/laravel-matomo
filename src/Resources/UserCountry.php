<?php

namespace BernskioldMedia\LaravelMatomo\Resources;

use BernskioldMedia\LaravelMatomo\Concerns\SelectsDate;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsPeriod;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsSites;

class UserCountry extends BaseResource
{
    use SelectsSites,
        SelectsPeriod,
        SelectsDate;

    public function countries(): object|array
    {
        return $this->get('getCountry');
    }

    public function continents(): object|array
    {
        return $this->get('getContinent');
    }

    public function regions(): object|array
    {
        return $this->get('getRegion');
    }

    public function cities(): object|array
    {
        return $this->get('getCity');
    }

    public function countryCodeMap(): object
    {
        return $this->get('getCountryCodeMapping');
    }

    public function geolocateIp(string $ipAddress): object
    {
        return $this->get('getCountryCodeMapping', [
            'ip' => $ipAddress,
        ]);
    }

    public function numberOfCountries(): object|array
    {
        return $this->get('getNumberOfDistinctCountries');
    }

    protected function moduleName(): string
    {
        return 'UserCountry';
    }
}
