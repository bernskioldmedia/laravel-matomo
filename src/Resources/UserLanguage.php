<?php

namespace BernskioldMedia\LaravelMatomo\Resources;

use BernskioldMedia\LaravelMatomo\Concerns\SelectsDate;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsPeriod;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsSites;

class UserLanguage extends BaseResource
{
    use SelectsSites,
        SelectsPeriod,
        SelectsDate;

    public function all(): object|array
    {
        return $this->get('getLanguage');
    }

    public function code(): object|array
    {
        return $this->get('getLanguageCode');
    }

    protected function moduleName(): string
    {
        return 'UserLanguage';
    }
}
