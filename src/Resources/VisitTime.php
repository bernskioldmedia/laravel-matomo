<?php

namespace BernskioldMedia\LaravelMatomo\Resources;

use BernskioldMedia\LaravelMatomo\Concerns\SelectsDate;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsPeriod;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsSites;

/**
 * VisitTime API lets you access reports by Hour (Server time),
 * and by Hour Local Time of your visitors.
 */
class VisitTime extends BaseResource
{
    use SelectsDate,
        SelectsPeriod,
        SelectsSites;

    public function byLocalTime(): object|array
    {
        return $this->get('getVisitInformationPerLocalTime');
    }

    public function byServerTime(): object|array
    {
        return $this->get('getVisitInformationPerServerTime');
    }

    public function byDayOfWeek(): object|array
    {
        return $this->get('getByDayOfWeek');
    }

    protected function moduleName(): string
    {
        return 'VisitTime';
    }
}
