<?php

namespace BernskioldMedia\LaravelMatomo\Resources;

use BernskioldMedia\LaravelMatomo\Concerns\SelectsDate;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsPeriod;
use BernskioldMedia\LaravelMatomo\Concerns\SelectsSites;

/**
 * VisitorInterest API lets you access two Visitor Engagement reports:
 * number of visits per number of pages, and number of visits per visit duration.
 */
class VisitorInterest extends BaseResource
{
    use SelectsSites,
        SelectsPeriod,
        SelectsDate;

    public function numberOfVisitsPerDuration(): object|array
    {
        return $this->get('getNumberOfVisitsPerVisitDuration');
    }

    public function numberOfVisitsPerPage(): object|array
    {
        return $this->get('getNumberOfVisitsPerPage');
    }

    public function numberOfVisitsByDaysSinceLastVisit(): object|array
    {
        return $this->get('getNumberOfVisitsByDaysSinceLast');
    }

    public function numberOfVisitsByVisitsCount(): object|array
    {
        return $this->get('getNumberOfVisitsByVisitCount');
    }

    protected function moduleName(): string
    {
        return 'VisitorInterest';
    }
}
